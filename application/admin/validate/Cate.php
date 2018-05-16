<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate{
    protected $rule = [
        'pid'=>'require|number',
        'catename'=>'require|max:30|unique:cate',
        'type'=>'number',
        'rec_index'=>'require|number',
        'rec_bottom'=>'require|number',
    ];
    protected $message = [
        'pid.require'=>'上级栏目必须选择',
        'catename.require'=>'栏目名称必须',
        'catename.max'=>'栏目名称最大30位',
        'catename.unique'=>'栏目名称必须唯一',
    ];
    protected $scene =[
        'add' => ['pid','catename','type','rec_index','rec_bottom'],
        'edit' => ['pid','catename','type','rec_index','rec_bottom'],
    ];
}
?>