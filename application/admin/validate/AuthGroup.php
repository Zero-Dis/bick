<?php
namespace app\admin\validate;
use think\Validate;
class AuthGroup extends Validate{
    protected $rule = [
        'title' => 'require|max:30',
        'status' => 'require|number|max:1',
    ];
    protected $message = [
        'title.require' => '用户组名称必须',
        'title.max' => '用户组名称最大30位',
        'status.require' => '用户组启用状态必须选择',
        'status.number' => '用户组启用状态有误',
        'status.max' => '用户组启用状态有误',
    ];
    protected $scene = [
        'add' => ['title','status'],
        'edit' => ['title','status'],
    ];

}
?>