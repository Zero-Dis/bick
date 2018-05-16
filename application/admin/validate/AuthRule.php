<?php
namespace app\admin\validate;
use think\Validate;
class AuthRule extends Validate{
    protected $rule = [
        'pid'=>'require|number',
        'title'=>'require|unique:auth_rule',
        'name'=>'require|unique:auth_rule',
    ];
    protected $message = [
        'pid.require'=>'上级栏目必选',
        'pid.number'=>'上级栏目设置出错',
        'title.require'=>'权限名称必填',
        'title.unique'=>'权限名称不得重复',
        'name.require'=>'控制器/方法 必填',
        'name.unique'=>'控制器/方法 不得重复',
    ];
    protected $scene = [
        'add' =>['pid','title','name'],
        'edit' =>['pid','title','name'],
    ];
}
?>