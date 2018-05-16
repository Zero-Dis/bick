<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Base extends Controller{
    public function _initialize(){
        $confs = Db::name('conf')->column('cnname','enname');
        $this->assign('confs',$confs);
        $this->get_cate();
        if(input('cateid')||input('artid')){
            $this->get_cate_pos();
        }
        $this->res_bottom_cates();
    }
    // 获取网站栏目
    public function get_cate(){
        $pcate = Db::name('cate')->where('pid',0)->select();
        foreach($pcate as $k=>$v){  // $v => 数据
            $ccate = Db::name('cate')->where('pid',$v['id'])->select();
            if($ccate){
                $pcate[$k]['ccate'] = $ccate;
            }else{
                $pcate[$k]['ccate'] = 0;
            }

        }
        $this->assign('cates',$pcate);
    }
    // 获取当前位置
    public function get_cate_pos(){
        $cates = Db::name('cate')->field('id,pid,catename')->select();  // 所有栏目
        if(input('cateid')){ // 来源 -- 栏目
            $id = input('cateid'); // 当前栏目id
        }
        if(input('artid')){  // 来源 -- 文章
            $id = Db::name('article')->where('id',input('artid'))->value('cateid');
        }
        $pos_cate = Db::name('cate')->field('id,pid,catename')->find($id);  // 当前栏目pid
        if($pos_cate['pid']){
            $pos_cates = ParentCate($cates,$pos_cate['pid']);
        }
        $pos_cates[] = $pos_cate;
        $this->assign('pos_cates',$pos_cates);
    }

    // 底部推荐栏目
    public function res_bottom_cates(){
        $res_bottom_cates = Db::name('cate')->where('rec_bottom',1)->order('id')->field('id,type,catename')->select();
        $this->assign('res_bottom_cates',$res_bottom_cates);
    }

}
?>