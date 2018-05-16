<?php
namespace app\admin\controller;
use think\Db;
use think\Loader;
use app\admin\model\Cate as CateModel;
class Cate extends Base{
    protected $beforeActionList = [  // 前置方法的属性
        'cate_del_before'=>['only'=>'cate_del'],   // 前置方法 => 执行前置方法的方法
    ];

    public function cate_list(){
        $cate_model = new CateModel();
        if(request()->isPost()){
            $data = input('post.');
            $arr = array();
            $i = 0;
            foreach($data as $k=>$v){
                $arr[$i]['id'] = $k;  // id
                $arr[$i]['sort'] = $v; // 排序
                $i++;
            }
            $sort_res =  $cate_model->saveAll($arr);
            if($sort_res){
                $this->success('栏目排序成功','cate_list');
            }else{
                $this->error('栏目排序失败');
            }
            return;
        }
        $res = $cate_model->cate_list_model();
        $this->assign('cateres',$res);
        return view();
    }

    public function cate_add(){
        if(request()->isPost()){
            $data = input();
            $validate = Loader::validate('Cate');
            $v_res = $validate->scene('add')->check($data);
            if($v_res === true){
                $cate_model = new CateModel();
                $res = $cate_model->cate_add_model($data);
                if($res){
                    $this->success('添加栏目成功','cate_list');
                }else{
                    $this->error('添加栏目失败');
                }
            }else{
                $this->error($validate->getError());
            }
            return;
        }
        $cate_model = new CateModel();
        $res = $cate_model->cate_list_model();
        $this->assign('list',$res);
        return view();
    }

    public function cate_del_before(){  // cate_del() 的前置方法
        $cateid = input('id');  // 待删除的栏目id
        $cate_model = new CateModel();
        $cate_model->cate_del_model($cateid);
    }

    public function cate_del(){  // 先删除子集，再删除 本身
        $cateid = input('id');
        $del_info = Db::name('cate')->delete($cateid);
        if($del_info){
            $this->success('删除栏目成功','cate_list');
        }else{
            $this->error('删除栏目失败');
        }
    }

    public function cate_edit(){
        $id = input('id');
        $cate_model = new CateModel();
        $res = $cate_model->cate_list_model();
        $res1 = Db::name('cate')->find($id);
        if(request()->isPost()){
            $data = input();
            $validate = Loader::validate('Cate');
            $va_res = $validate->scene('edit')->check($data);
            if($va_res === true){
                $info = Db::name('cate')->update($data);
                if($info !== false){
                    $this->success('编辑栏目成功','cate_list');
                }else{
                    $this->error('编辑栏目失败');
                }
            }else{
                $this->error($validate->getError());
            }
            return;
        }
        $this->assign([
            'list'=>$res,
            'list1'=>$res1,
        ]);
        return $this->fetch();
    }

}
?>

