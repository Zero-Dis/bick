<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;  // 获取请求信息类
class Base extends Controller{
    public function _initialize(){  // 构造方法

        // 判断是否登录
        $name = session('user');
        $id = session('id');
        if(empty($name)||empty($id)){
            $this->error('请先登录！','login/index');
        }

        // 启用 Auth 权限
        $auth =new Auth();
        $request = Request::instance();
        $controller = $request->controller();  // 获取当前请求 controller
        $action = $request->action();  // 获取当前请求 action
        $name = $controller .'/'. $action;
        $noCheck = ['Index/index','Admin/admin_logout'];
        if(!in_array($name,$noCheck)){
            if(!$auth->check($name,session('id'))){  // 权限判断 $name为需要验证的权限  session('id') 为当前人员id
                //权限不够
                $this->error('权限不足，请联系超级管理员','Index/index');
            }
        }

    }

}
?>