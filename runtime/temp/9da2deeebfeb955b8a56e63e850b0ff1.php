<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\wamp\www\bick\public/../application/index\view\imglist\imglist.html";i:1493372525;s:68:"D:\wamp\www\bick\public/../application/index\view\common\header.html";i:1494468847;s:68:"D:\wamp\www\bick\public/../application/index\view\common\footer.html";i:1493713848;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>bick</title>
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

    <style type="text/css">
        body {
            background-image: none;
            background-color: #dedede;
            color: #999999;
            font-family: "Microsoft Yahei", "Helvetica Neue", Arial, Helvetica, sans-serif;
            font-size: 12px;
            height: 100%;
            text-align: left;
            width: 100%;
        }

        #xh_container {
            min-height: 1000px;
            background-color: #dedede;
            margin-top: 36px;
            width: 1098px;
        }

        #wrapper {
            background-color: #dedede;
        }

        #l-nav {
            background-image: url('/blog4./style/simg/look-bike-nav-bg.png');
            width: 188px;
            height: 360px;
            float: left;
        }

        #l-nav a {
            font-size: 14px;
            color: #000000;
        }

        #l-nav a:hover {
            font-size: 14px;
            color: #999999;
        }

        #l-nav div {
            padding-left: 20px;
        }

        #l-nav .l-nav-word {
            height: 40px;
            line-height: 40px;
        }

        #l-focus {
            float: right;
        }

        img {
            vertical-align: middle;
        }

        div {
            color: #666666;
        }

        #menu-item-196 a.a, #menu-item-198 a.a, #menu-item-197 a.a {
            color: #00BBEE;
        }

        #menu-item-198 {
            background-image: url('./images/up-arrow.png');
            background-position: center bottom;
            background-repeat: no-repeat;
        }

        .boxBor {
            position: absolute;
            left: 0;
            top: 0;
            display: none;
            z-index: 9999;
            background-color: #ffffff;
            opacity: 0.3;
            filter: alpha(opacity=30)
        }

    </style>
    <div id="xh_container">
        <div class="path"><a href='#'>主页</a> >
            <?php if(is_array($pos_cates) || $pos_cates instanceof \think\Collection || $pos_cates instanceof \think\Paginator): $i = 0; $__LIST__ = $pos_cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pos_cate): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('Imglist/imglist',array('cateid'=>$pos_cate['id'])); ?>"><?php echo $pos_cate['catename']; ?></a> >
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php if(is_array($arts) || $arts instanceof \think\Collection || $arts instanceof \think\Paginator): $i = 0; $__LIST__ = $arts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
        <div class="xh_265x265x00">
            <div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>"><img src="__IMG__/<?php echo $art['thumb']; ?>"
                                                                  alt="<?php echo $art['title']; ?>" height="188"
                                                                  width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;"><?php echo date("Y年m月d日",$art['time']); ?></div>
                    <div style="font-size: 14px;height:45px;">
                        <a target="_blank" href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>"><?php echo $art['title']; ?></a></div>
                </div>
                <!--</div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/392.html"><img src="__PUBLIC__/images/352.jpg" alt="骑看世界：三个女孩的欧洲骑行之路" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/392.html">骑看世界：三个女孩的欧洲骑行之路</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/395.html"><img src="__PUBLIC__/images/355.jpg" alt="骑看世界：探索地中海科西嘉岛" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/395.html">骑看世界：探索地中海科西嘉岛</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/361.html"><img src="__PUBLIC__/images/321.jpg" alt="骑行40000公里 英国胶片摄影师的骑游之旅" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/361.html">骑行40000公里 英国胶片摄影师的骑游之旅</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/394.html"><img src="__PUBLIC__/images/1-1402061F00W33.jpg" alt="骑看世界：春节骑行海南岛 畅游冬日骑行天堂" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/394.html">骑看世界：春节骑行海南岛 畅游冬日骑行天堂</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/364.html"><img src="__PUBLIC__/images/324.jpg" alt="隆猫西班牙自行车之旅-Mallorca岛梦幻旅程（上）" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/364.html">隆猫西班牙自行车之旅-Mallorca岛梦幻旅程（上）</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/393.html"><img src="__PUBLIC__/images/353.jpg" alt="复古骑行上海，听法国大梧桐诉说旧日故事" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/393.html">复古骑行上海，听法国大梧桐诉说旧日故事</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/389.html"><img src="__PUBLIC__/images/347.jpg" alt="执着的小辫与西藏的骑车旅行" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/389.html">执着的小辫与西藏的骑车旅行</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/390.html"><img src="__PUBLIC__/images/348.jpg" alt="大理洱海骑行 到挖色赶个大集" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/390.html">大理洱海骑行 到挖色赶个大集</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/391.html"><img src="__PUBLIC__/images/350.jpg" alt="KONA 29寸车骑游哥伦比亚" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/391.html">KONA 29寸车骑游哥伦比亚</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                    border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                    <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                        margin-left: 14px;">
                        <a target="_blank" href="/life/386.html"><img src="__PUBLIC__/images/344.jpg" alt="Cyclist:赵勇权传授台湾环岛骑行摄影经验" height="188" width="313"></a>
                    </div>
                    <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                        <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                        <div style="font-size: 14px;height:45px;">
                           <a target="_blank" href="/life/386.html">Cyclist:赵勇权传授台湾环岛骑行摄影经验</a></div>

                    </div>
                </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/387.html"><img src="__PUBLIC__/images/346.jpg" alt="两个青海 骑行在3197米之上" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/387.html">两个青海 骑行在3197米之上</a></div>
                    
                </div>-->
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div style="clear: both;">
        </div>
        <div id="pagination">
            <div class="wp-pagenavi">
                <?php echo $arts->render(); ?>
                <!--<span class="current">1</span><a class="page larger" href='list_2.html'>2</a><a
                    class="page larger" href='list_3.html'>3</a><a class="page larger"
                                                                   href='list_2.html'>下一页</a><a
                    class="page larger" href='list_3.html'>末页</a><span class="pages">共 3 页，36条</span>-->
            </div>
        </div>
    </div>


</div>
<script type="text/javascript">
    $("#menu-item-198").find("a").addClass("a");
    $(".i-prev").hover(function () {
        $(this).addClass("i-prev-o");
    }, function () {
        $(this).removeClass("i-prev-o");
    });
    $(".i-next").hover(function () {
        $(this).addClass("i-next-o");
    }, function () {
        $(this).removeClass("i-next-o");
    });
    $(".more0").hover(function () {
        $(this).attr("src", "./style/simg/more-o.png");
    }, function () {
        $(this).attr("src", "./style/simg/more.png");
    });
</script>
<div class="boxBor"></div>

<input type="hidden" id="hdBoxbor"/>

<div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>


</div>
<script type="text/javascript">
    $(function () {
        var imgHoverSetTimeOut = null;
        $('.xh_265x265x00 img').hover(function () {
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