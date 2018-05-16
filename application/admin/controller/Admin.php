<?php
namespace app\admin\controller;
use app\admin\controller\Base;  // 并未有实质性的使用
use app\admin\model\Admin as AdminModel; // 引入 Admin 模型类
use think\Db;
class Admin extends Base{
    public function admin_list(){
        $res = Db::name('admin')->field('id,name')->select(); // 分页查询  config文件中有分页配置
        foreach($res as $k=>$v){
            $auth = new Auth();  // 实例化 auth 类
            $groups = $auth->getGroups($v['id']);  // 获取管理员组信息
            $str = $groups[0]['title'];
            $res[$k]['group'] = $str;
        }
        $this->assign('list',$res);
        return $this->fetch();
    }

    public function admin_add(){
        if(request()->isPost()){
            $data = input();
            $admin_model = new AdminModel();  // 实例化 AdminModel
            $res = $admin_model->admin_add_model($data);
            if($res === 1){
                $this->success('添加成功','admin_list');
            }elseif($res === 0){  // 添加失败
                $this->error('添加失败');
            }else{  // 验证失败
                $this->error($res);
            }
            return;
        }
        $groups = Db::name('auth_group')->where('status',1)->field('id,title')->select();
        $this->assign('groups',$groups);
        return $this->fetch();
    }

    public function admin_edit(){
        $id = input('id');
        $name = Db::name('admin')->alias('a')->join('auth_group_access b','a.id = b.uid')->field('a.*,b.group_id')->find($id);
        if(request()->isPost()){
            $admin_model = new AdminModel();
            $res = $admin_model->admin_edit_model($name);
            if($res === 1){
                $this->success('修改管理员成功','admin_list');
            }elseif($res === 0){
                $this->error('修改管理员失败');
            }else{
                $this->error($res);
            }
            return;
        }
        $this->assign([
            'name'=>$name,
            'groups'=>Db::name('auth_group')->where('status',1)->field('id,title')->select(),
        ]);
        return view();
    }

    public function admin_del(){
        $admin_model = new AdminModel();
        $res = $admin_model->admin_del_model();
        if($res === 1){
            $this->success('删除管理员成功','admin_list');
        }elseif($res === 0){
            $this->error('删除管理员失败');
        }elseif($res === 2){
            $this->error('不能删除root管理员');
        }
    }

    public function admin_logout(){  // 管理员退出登录
        session(null); // 清楚所有的session
        $user = session('user');
        if(empty($user)){
            $this->success('管理员退出登录成功！','login/index');
        }
    }

}
?>