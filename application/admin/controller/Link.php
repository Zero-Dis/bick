<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Loader;
class Link extends Base{
    public function link_list(){
        if(request()->isPost()){
            $data = input('post.');
            foreach($data as $k=>$v){  // $k id ; $v 排序值
                Db::name('link')->where('id',$k)->update(['sort'=>$v]);
            }
        }
        $links = Db::name('link')->order('sort')->paginate(8);
        $this->assign('links',$links);
        return view();
    }

    public function link_add(){
        if(request()->isPost()){
            $data = input();
            $validate = Loader::validate('Link');
            $vl_res = $validate->scene('add')->check($data);
            if($vl_res === true){  // 验证通过
                $info = Db::name('link')->insert($data);
                if($info){
                    $this->success('添加链接成功','link_list');
                }else{
                    $this->error('添加链接失败');
                }
            }else{
                $this->error($validate->getError());
            }
            return;
        }
        return view();
    }

    public function link_edit(){
        if(request()->isPost()){
            $data = input();
            $validate = Loader::validate('Link');
            $vl_res = $validate->scene('edit')->check($data);
            if($vl_res === true){  // 验证通过
                $info = Db::name('link')->update($data);
                if($info){
                    $this->success('链接修改成功','link_list');
                }else{
                    $this->error('链接修改失败');
                }
            }else{
                $this->error($validate->getError());
            }
            return;
        }
        $links = Db::name('link')->find(input('id'));
        $this->assign('links',$links);
        return view();
    }

    public function link_del(){
        $id = input('id');
        $info = Db::name('link')->delete($id);
        if($info){
            $this->success('删除链接成功','link_list');
        }else{
            $this->error('删除链接失败');
        }
    }


}
?>