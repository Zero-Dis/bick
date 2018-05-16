<?php
return [
    'view_replace_str'=>[
        '__PUBLIC__' => URL_PATH.'public/static/admin',
        '__IMG__' => URL_PATH.'public/uploads',
    ],
    //分页配置
    'paginate'               => [
        'type'      => 'bootstrap',   // 指定分页样式  可以自己写文件 引入
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
    // 默认控制器名
    'default_controller'     => 'Login',
];
?>