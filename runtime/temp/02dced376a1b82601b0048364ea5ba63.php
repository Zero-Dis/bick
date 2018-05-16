<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\wamp\www\bick\public/../application/admin\view\cate\cate_edit.html";i:1493091391;s:65:"D:\wamp\www\bick\public/../application/admin\view\common\top.html";i:1491465151;s:66:"D:\wamp\www\bick\public/../application/admin\view\common\left.html";i:1493084958;}*/ ?>
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
    <script src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
    <script src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>

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
                    <li>
                        <a href="<?php echo url('cate_list'); ?>">栏目管理</a>
                    </li>
                    <li class="active">编辑栏目</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">编辑栏目</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" method="post">
                                        <!--上级栏目id-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">上级栏目</label>

                                            <div class="col-sm-6">
                                                <select name="pid">
                                                    <option value="0">顶级栏目</option>
                                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $list1['pid']): ?>selected="selected"<?php endif; ?>>
                                                        <?php if($vo['level'] != 0): ?>|<?php endif; ?>
                                                        <?php echo str_repeat('-', $vo['level']*4)?>
                                                        <?php echo $vo['catename']; ?>
                                                    </option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">栏目名称</label>

                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="" name="catename"
                                                       value="<?php echo $list1['catename']; ?>" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">关键词</label>

                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="" name="keywords"
                                                       value="<?php echo $list1['keywords']; ?>" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">描述</label>

                                            <div class="col-sm-6">
                                                <textarea name="desc" class="form-control"><?php echo $list1['desc']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">栏目类型</label>

                                            <div class="col-sm-6">
                                                <div class="radio" style="float:left; margin-right:10px;">
                                                    <label>
                                                        <input name="type" value="1" type="radio" <?php if($list1['type'] == 1): ?> checked="checked" <?php endif; ?>>
                                                        <span class="text">文章列表</span>
                                                    </label>
                                                </div>
                                                <div class="radio" style="float:left; margin-right:10px;">
                                                    <label>
                                                        <input name="type" class="inverted" value="2" type="radio" <?php if($list1['type'] == 2): ?> checked="checked"<?php endif; ?>>
                                                        <span class="text">单页</span>
                                                    </label>
                                                </div>
                                                <div class="radio" style="float:left; margin-right:10px;">
                                                    <label>

                                                        <input name="type" class="inverted" value="3" type="radio" <?php if($list1['type'] == 3): ?> checked="checked" <?php endif; ?>>
                                                        <span class="text">图片列表</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">推荐到首页</label>
                                            <div class="col-sm-6">
                                                <label class="radio" style="float:left; margin-right:10px;"
                                                       style="margin-right:15px;">
                                                    <input name="rec_index" value="1" type="radio" <?php if($list1['rec_index'] == 1): ?> checked = "checked" <?php endif; ?>>
                                                    <span class="text">是</span>
                                                </label>
                                                <label class="radio" style="float:left; margin-right:10px;"
                                                       style="margin-right:15px;">
                                                    <input class="inverted" name="rec_index" value="0" type="radio" <?php if($list1['rec_index'] == 0): ?> checked = "checked" <?php endif; ?>>
                                                    <span class="text">否</span>
                                                </label>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">推荐到底部</label>
                                            <div class="col-sm-6">
                                                <label class="radio" style="float:left; margin-right:10px;"
                                                       style="margin-right:15px;">
                                                    <input name="rec_bottom" value="1" type="radio" <?php if($list1['rec_bottom'] == 1): ?>checked="checked"<?php endif; ?>>
                                                    <span class="text">是</span>
                                                </label>
                                                <label class="radio" style="float:left; margin-right:10px;"
                                                       style="margin-right:15px;">
                                                    <input class="inverted" name="rec_bottom" value="0" type="radio" <?php if($list1['rec_bottom'] == 0): ?>checked="checked"<?php endif; ?>>
                                                    <span class="text">否</span>
                                                </label>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label no-padding-right">内容</label>

                                            <div class="col-sm-6">
                                                <textarea id="content" name="content"><?php echo $list1['content']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
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
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content', {initialFrameWidth: 580, initialFrameHeight: 300,});
</script>


</body>
</html>