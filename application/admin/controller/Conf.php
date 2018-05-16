<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
class Conf extends Base{
    public function conf_list(){
        if(request()->isPost()){
            $data = input('post.');
            foreach($data as $k=>$v){
                Db::name('conf')->where('id',$k)->update(['sort'=>$v]);
            }
        }
        $confres = Db::name('conf')->order('sort asc')->paginate(10);
        $this->assign('confres',$confres);
        return view();
    }

    public function conf_add(){
        if(request()->isPost()){
            $data = input();
            $validate = Loader::validate('Conf');
            if($validate->scene('add')->check($data)){
                $data['values'] = str_replace('，',',',$data['values']);
                $info = Db::name('conf')->insert($data);
                if($info){
                    $this->success('添加配置项成功','conf_list');
                }else{
                    $this->error('添加配置项失败');
                }
            }else{
                $this->error($validate->getError());
            }
            return;
        }
        return view();
    }

    public function conf_edit(){
        if(input('post.')){
            $data = input();
            $validate = Loader::validate('Conf');
            if($validate->scene('edit')->check($data)){
                $data['values'] = str_replace('，',',',$data['values']);
                $info = Db::name('conf')->update($data);
                if($info !== false){
                    $this->success('修改配置项成功','conf_list');
                }else{
                    $this->error('修改配置项失败');
                }
            }else{
                $this->error($validate->getError());
            }
            return;
        }
        $confs = Db::name('conf')->find(input('id'));
        $this->assign('confs',$confs);
        return view();
    }

    public function conf_del(){
        $id = input('id');
        $info = Db::name('conf')->delete($id);
        if($info){
            $this->success('删除配置项成功','conf_list');
        }else{
            $this->error('删除配置项失败');
        }
    }

    // 系统 -- 配置
    public function conf(){
        if(request()->isPost()){
            $data = input();
            $data['desc'] = str_replace(' ','',$data['desc']);
            foreach($data as $k=>$v){
                Db::name('conf')->where('enname',$k)->update(['value'=>$v]);  // 修改4种形式的值
                $data_k[] = $k;
            }
            $ennames = Db::name('conf')->column('enname');  // [enname] 一维数组
            $dif_arr = array_diff($ennames,$data_k);  // 两个数组找不同
            foreach($dif_arr as $k=>$v){  // $v 就是不同的 enname
                Db::name('conf')->where('enname',$v)->update(['value'=>'']);  // 修改复选框的值
            }
            $this->success('修改配置项成功','conf');
            return;
        }
        $confres = Db::name('conf')->order('sort asc')->select();
        $this->assign('confres',$confres);
        return view();
    }


}
?>