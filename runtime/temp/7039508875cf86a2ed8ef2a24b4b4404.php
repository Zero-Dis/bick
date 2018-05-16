<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\wamp\www\bick\public/../application/index\view\search\search.html";i:1493717136;s:68:"D:\wamp\www\bick\public/../application/index\view\common\header.html";i:1494468847;s:68:"D:\wamp\www\bick\public/../application/index\view\common\footer.html";i:1493713848;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ThinkPHP5.0</title>
    <meta name="description" content="ThinkPHP5.0"/>
    <meta name="keywords" content="ThinkPHP5.0"/>
    <link href="__BOOT__/admin/style/bootstrap.css" rel="stylesheet">
    <script src="__BOOT__/admin/style/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/style/style.css"/>
    <script src="__PUBLIC__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__PUBLIC__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__PUBLIC__/style/voterajax.js"></script>
    <script type="text/javascript" src="__PUBLIC__/style/userregister.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/style/votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="__PUBLIC__/style/voteitup.css" type="text/css"/>
    <link rel="stylesheet" href="__PUBLIC__/style/list.css" type="text/css"/>
</head>
<body id="list_style_2" class="list_style_2">
<script>
    function subForm() {

        formsearch.submit();
        //form1为form的id
    }
</script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title="宽屏大气文章类--41天鹰模板">宽屏大气文章类--41天鹰模板</a>

                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">
            <ul id="jsddm">
                <li><a class="navi_home" href="http://localhost/bick/public/index">首页</a></li>
                <!-- <li><a class="navi_home" target="_blank" href="http://www.chuanke.com/s2260700.html">ThinkPHP5视频教程</a>
                </li>-->
                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php if($cate['type'] == 1): ?><?php echo url('Artlist/artlist',array('cateid'=>$cate['id'])); elseif($cate['type'] == 2): ?><?php echo url('Page/page',array('cateid'=>$cate['id'])); else: ?><?php echo url('Imglist/imglist',array('cateid'=>$cate['id'])); endif; ?>"><?php echo $cate['catename']; ?></a>
                    <?php if($cate['ccate'] != 0): ?>
                    <ul>
                        <?php foreach($cate['ccate'] as $k=>$v):?>
                        <li><a href="<?php echo url('Artlist/artlist',array('cateid'=>$v['id'])); ?>">
                            <?php echo $v['catename'];?></a></li>
                        <?php endforeach?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div style="clear: both;">

            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
                    <form name="formsearch" action="<?php echo url('Search/search'); ?>" method="get">
                        <input name="keywords" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}" onblur="if(this.value==''){this.value='在这里搜索...';}"/>
                    </form>
                </div>
                <div style="float: left;">
                    <img src="__PUBLIC__/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"/></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<div id="wrapper">
    <div id="xh_container">
        <div id="xh_content">
            <div class="path">搜索<font style="color:red; margin:0 5px;"><?php echo $keywords; ?></font>结果：</div>
            <div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
                <?php if($keywords != ''): if(is_array($serRes) || $serRes instanceof \think\Collection || $serRes instanceof \think\Paginator): $i = 0; $__LIST__ = $serRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>"
                           title="<?php echo $art['title']; ?>">
                            <img src="__IMG__/<?php echo $art['thumb']; ?>" alt="<?php echo $art['title']; ?>" height="240" width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>"
                               title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a>
                        </h2>
                        <span class="time"><?php echo date("Y-m-d",$art['time']); ?></span>
                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            <?php echo $art['desc']; ?>
                        </div>
                        <div class="b">
                            <a href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>" class="xh_readmore"
                               rel="nofollow">readmore</a> <span title="<?php echo $art['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $art['zan']; ?></span></span> </span> <span title="<?php echo $art['click']; ?>人浏览" class="xh_views">
                            <?php echo $art['click']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; else: ?>
                没有搜索关键词
                <?php endif; ?>
                <div id="pagination">
                    <div class="wp-pagenavi">
                        <?php if($keywords != ''): ?>
                        <?php echo $serRes->render(); endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="xh_sidebar">
            <!-- 右侧 -->

            <div class="widget">

                <div style="background: url('__PUBLIC__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                </div>
                <ul id="ulHot">
                    <?php if(is_array($serHot) || $serHot instanceof \think\Collection || $serHot instanceof \think\Paginator): $i = 0; $__LIST__ = $serHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a
                                href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>" target="_blank"><img
                                src="__IMG__/<?php echo $art['thumb']; ?>" width="83" title="<?php echo $art['title']; ?>"/></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a
                                href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>" target="_blank"
                                title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a></div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </ul>
            </div>

            <div class="widget portrait">
                <div>

                </div>
            </div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor"></div>

    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <script type="text/javascript">
        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () {
                    $(".boxBor").hide();
                }, 500);
            });
            $(".boxBor").hover(
                    function () {
                        clearTimeout(imgHoverSetTimeOut);
                    }
                    , function () {
                        $(".boxBor").hide();
                    }
            );
        });
        function IBoxBor() {
            window.open($("#hdBoxbor").val());
        }
        function goanewurl() {
            window.open($("#hdUrlFocus").val());
        }
    </script>

</div>

<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
                <?php if(is_array($res_bottom_cates) || $res_bottom_cates instanceof \think\Collection || $res_bottom_cates instanceof \think\Paginator): $i = 0; $__LIST__ = $res_bottom_cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res_bottom_cate): $mod = ($i % 2 );++$i;?>
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156"><a href="<?php if($res_bottom_cate['type'] == 1): ?><?php echo url('Artlist/artlist',array('cateid'=>$res_bottom_cate['id'])); elseif($res_bottom_cate['type'] == 2): ?><?php echo url('Page/page',array('cateid'=>$res_bottom_cate['id'])); else: ?><?php echo url('Imglist/imglist',array('cateid'=>$res_bottom_cate['id'])); endif; ?>"><?php echo $res_bottom_cate['catename']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
                    <a href="/news/">行业资讯</a></li>
                <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
                    <a href="/tougao.html">我要投稿</a></li>-->
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>
<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="__PUBLIC__/style/z700bike_global.js"></script>

</body>
</html>
