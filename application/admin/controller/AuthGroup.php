<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Loader;
use app\admin\model\AuthRule as AuthRuleModel;
class AuthGroup extends Base{
    public function authGroup_list(){
        $authGroupRes = Db::name('auth_group')->field('id,title,status')->select();
        $this->assign('authGroupRes',$authGroupRes);
        return view();
    }

    public function authGroup_add(){
        if(request()->isPost()){
            $data = input();
            if(empty($data['status'])){  // 关闭状态
                $data['status'] = 0;
            }
            if(!empty($data['rules'])){
                $data['rules'] = implode(',',$data['rules']);
            }
            $val = Loader::validate('AuthGroup');
            if(!$val->scene('add')->check($data)){  // 验证不通过
                $this->error($val->getError());
            }else{
                $info = Db::name('auth_group')->insert($data);
                if($info){
                    $this->success('添加用户组成功','authGroup_list');
                }else{
                    $this->error('添加用户组失败');
                }
            }
            return;
        }
        $authRuleModel = new AuthRuleModel;
        $authRuleRes = $authRuleModel->AuthRule_select();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function authGroup_edit(){
        if(request()->isPost()){
            $data = input();
            if(empty($data['status'])){
                $data['status'] = 0;
            }
            if(!empty($data['rules'])){
                $data['rules'] = implode(',',$data['rules']);
            }else{
                $data['rules'] = '';
            }
            $val = Loader::validate('AuthGroup');
            if(!$val->scene('edit')->check($data)){
                $this->error($val->getError());
            }else{
                $info = Db::name('auth_group')->update($data);
                if($info !== false){
                    $this->success('修改用户组成功','authGroup_list');
                }else{
                    $this->error('修改用户组失败');
                }
            }
            return;
        }
        $authgroups = Db::name('auth_group')->find(input('id'));
        $authRuleModel = new AuthRuleModel;
        $authRuleRes = $authRuleModel->AuthRule_select();
        $this->assign([
            'authgroups'=>$authgroups,
            'authRuleRes'=>$authRuleRes,
        ]);
        return view();
    }

    public function authGroup_del(){
        $id = input('id');
        $info = Db::name('auth_group')->delete($id);
        if($info){
            $this->success('删除用户组成功','authGroup_list');
        }else{
            $this->error('删除用户组失败');
        }
    }

}
?>