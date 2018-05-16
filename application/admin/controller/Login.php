<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller{
    public function index(){   // 管理员登录成功
        if(request()->isPost()){
            if(!captcha_check(input('code'))){  //验证失败
                $this->error('验证码输入错误！');
            }else{
                $admin_model = new Admin();
                $res = $admin_model->admin_login();
                if($res === 1){ // 登录成功
                    $this->success('管理员登录成功！','index/index');
                }else{
                    $this->error('管理员信息有误！');
                }
            }
            return;
        }
        return $this->fetch('login');
    }
}
?>