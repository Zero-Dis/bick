<?php
namespace app\admin\validate;
use think\Validate;
class Conf extends Validate{
    protected $rule = [
        'cnname' => 'require|unique:conf',
        'enname' => 'require|unique:conf',
        'type' => 'require|number',
    ];
    protected $message = [
        'cnname.require'=>'配置项中文名必须',
        'cnname.unique'=>'配置项不能重复',
        'enname.require'=>'配置项英文名必须',
        'enname.unique'=>'配置项不能重复',
        'type.require'=>'配置项类型必须',
        'type.number'=>'配置项类型不对',
    ];
    protected $scene = [
        'add' => ['cnname','enname','type'],
        'edit' => ['cnname','enname'],
    ];
}
?>