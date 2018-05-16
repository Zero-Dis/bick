<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate{
    protected $rule = [
        'name'=>'require|max:30|unique:admin',
        'password'=>'require|length:6,12|number',
        'group_id' => 'require|number|gt:0',
    ];
    protected $message = [
        'name.require' => '管理员名称必须',
        'name.max' => '管理员名称最大长度30位',
        'name.unique'=> '管理员名称不能重复',
        'password.require'=> '管理员密码必须',
        'password.length'=> '管理员密码长度6到12位',
        'password.number'=> '管理员密码必须为数字',
        'group_id.require' => '请选择管理员分组',
        'group_id.number' => '管理员分组有误',
        'group_id.gt' => '请选择管理员分组',
    ];
    protected $scene = [
        'add' => ['name','password','group_id'],
        'edit_np' => ['name','group_id'],
        'edit_hp' => ['name','password','group_id'],
    ];
}
?>