<?php
namespace app\admin\validate;
use think\Validate;
class Link extends Validate{
    protected $rule = [
        'title' => 'require|max:60',
        'url' => 'require|url',
    ];
    protected $message = [
        'title.require' => '链接标题必须',
        'title.max' => '链接标题最大60位',
        'url.require' => '链接地址必须',
        'url.url' => '无效的链接地址',
    ];
    protected $scene = [
        'add' => ['title','url'],
        'edit' => ['title','url'],
    ];
}
?>