<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\wamp\www\tp5\public/../application/admin\view\auth_group\authgroup_list.html";i:1493091354;s:64:"D:\wamp\www\tp5\public/../application/admin\view\common\top.html";i:1491465151;s:65:"D:\wamp\www\tp5\public/../application/admin\view\common\left.html";i:1493084958;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ThinkPHP5.0</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="__PUBLIC__/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__/images/xue.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('user'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/admin_logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/admin_edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>

        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <!--<li>
            <a href="http://www.chuanke.com/s2260700.html" target="_blank" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">ThinkPHP5视频教程</span>
                <i class="menu-expand"></i>
            </a>
        </li>-->

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Admin/admin_list'); ?>">
                                    <span class="menu-text">
                                        管理员列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('AuthGroup/authGroup_list'); ?>">
                                    <span class="menu-text">
                                        用户组列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('AuthRule/authRule_list'); ?>">
                                    <span class="menu-text">
                                        权限列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-folder"></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Cate/cate_list'); ?>">
                                    <span class="menu-text">
                                        栏目列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Article/article_list'); ?>">
                                    <span class="menu-text">
                                        文章列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-chain"></i>
                <span class="menu-text">友情连接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Link/link_list'); ?>">
                        <span class="menu-text">
                            链接列表
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Conf/conf'); ?>">
                                    <span class="menu-text">
                                        配置
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Conf/conf_list'); ?>">
                                    <span class="menu-text">
                                        配置列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
    <!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                    <li class="active">用户组管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加用户组" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url('authGroup_add'); ?>'"><i class="fa fa-plus"></i> Add
                </button>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="flip-scroll">
                                    <form action="" method="post">
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                            <tr>
                                                <th class="text-center" width="10%">ID</th>
                                                <th class="text-center">用户组名称</th>
                                                <th class="text-center">启用状态</th>
                                                <th class="text-center" width="20%">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($authGroupRes) || $authGroupRes instanceof \think\Collection || $authGroupRes instanceof \think\Paginator): $i = 0; $__LIST__ = $authGroupRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authGroup): $mod = ($i % 2 );++$i;?>
                                            <tr>
                                                <td align="center"><?php echo $authGroup['id']; ?></td>
                                                <td align="center"><?php echo $authGroup['title']; ?></td>
                                                <td align="center">
                                                    <?php if($authGroup['status'] == 1): ?>
                                                    <a class="btn btn-success btn-sm" href="javascript:void(0);">启用</a>
                                                    <?php else: ?>
                                                    <a class="btn btn-darkorange btn-sm"
                                                       href="javascript:void(0);">禁用</a>
                                                    <?php endif; ?>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo url('authGroup_edit',array('id'=>$authGroup['id'])); ?>"
                                                       class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a href="#"
                                                       onClick="warning('确实要删除吗', '<?php echo url('authGroup_del',array('id'=>$authGroup['id'])); ?>')"
                                                       class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div style="padding-top:10px;">

                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__PUBLIC__/style/jquery_002.js"></script>
<script src="__PUBLIC__/style/bootstrap.js"></script>
<script src="__PUBLIC__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__PUBLIC__/style/beyond.js"></script>


</body>
</html>