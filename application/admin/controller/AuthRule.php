<?php
namespace app\admin\controller;
use think\Db;
use think\Loader;
use app\admin\model\AuthRule as AuthRuleModel;
class AuthRule extends Base{
    public function authRule_list(){
        if(request()->isPost()){
            $data = input('post.');
            foreach($data as $k=>$v){
                Db::name('auth_rule')->where('id',$k)->update(['sort'=>$v]);
            }
        }
        $authRuleModel = new AuthRuleModel;
        $authRuleRes = $authRuleModel->AuthRule_select();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function authRule_add(){
        if(request()->isPost()){
            $data = input();
            if($data['pid'] != 0){
                $level = Db::name('auth_rule')->where('id',$data['pid'])->value('level');
                $data['level'] = $level+1;
            }
            $val = Loader::validate('AuthRule');
            if(!$val->scene('add')->check($data)){
                $this->error($val->getError());
            }else{
                $info = Db::name('auth_rule')->insert($data);
                if($info){
                    $this->success('添加权限成功','authRule_list');
                }else{
                    $this->error('添加权限失败');
                }
            }
            return;
        }
        $authRuleModel = new AuthRuleModel;
        $authRuleRes = $authRuleModel->AuthRule_select();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    public function authRule_edit(){
        if(request()->isPost()){
            $data = input();
            $val = Loader::validate('AuthRule');
            if(!$val->scene('edit')->check($data)){
                $this->error($val->getError());
            }else{
                $info = Db::name('auth_rule')->update($data);
                if($info !== false){
                    $this->success('修改权限成功','authRule_list');
                }else{
                    $this->error('修改权限失败');
                }
            }
            return;
        }
        $authRuleModel = new AuthRuleModel;
        $authRuleRes = $authRuleModel->AuthRule_select();
        $this->assign([
            'authRuleRes'=>$authRuleRes,
            'authRules'=>Db::name('auth_rule')->find(input('id')),
        ]);
        return view();
    }

    public function authRule_del(){
        $id = input('id');
        $authRuleModel = new AuthRuleModel;
        $del_before_ids = $authRuleModel->AuthRule_del($id);
        $del_before_ids[] = (int)$id;
        $info = AuthRuleModel::destroy($del_before_ids);
        if($info){
            $this->success('删除权限成功','authRule_list');
        }else{
            $this->error('删除权限失败');
        }
    }

}
?>