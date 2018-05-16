<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\wamp\www\bick\public/../application/index\view\article\article.html";i:1494381798;s:68:"D:\wamp\www\bick\public/../application/index\view\common\header.html";i:1494468847;s:68:"D:\wamp\www\bick\public/../application/index\view\common\footer.html";i:1493713848;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>bick</title>
    <link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/style/style.css"/>
    <script src="__PUBLIC__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jquery.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__PUBLIC__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__PUBLIC__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__PUBLIC__/style/voterajax.js"></script>
    <script type="text/javascript" src="__PUBLIC__/style/userregister.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/style/pagenavi-css.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="__PUBLIC__/style/votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="__PUBLIC__/style/voteitup.css" type="text/css"/>
    <link rel="stylesheet" href="__PUBLIC__/style/article.css" type="text/css"/>
    <script language="javascript" type="text/javascript" src="/include/dedeajax2.js"></script>
    <script language="javascript" type="text/javascript">
        <!--

        function postBadGood(ftype, fid) {
            var taget_obj = document.getElementById(ftype + fid);
            var saveid = GetCookie('badgoodid');
            if (saveid != null) {
                var saveids = saveid.split(',');
                var hasid = false;
                saveid = '';
                j = 1;
                for (i = saveids.length - 1; i >= 0; i--) {
                    if (saveids[i] == fid && hasid) continue;
                    else {
                        if (saveids[i] == fid && !hasid) hasid = true;
                        saveid += (saveid == '' ? saveids[i] : ',' + saveids[i]);
                        j++;
                        if (j == 10 && hasid) break;
                        if (j == 9 && !hasid) break;
                    }
                }
                if (hasid) {
                    alert('您刚才已表决过了喔！');
                    return false;
                }
                else saveid += ',' + fid;
                SetCookie('badgoodid', saveid, 1);
            }
            else {
                SetCookie('badgoodid', fid, 1);
            }
            myajax = new DedeAjax(taget_obj, false, false, '', '', '');
            myajax.SendGet2("/plus/feedback.php?aid=" + fid + "&action=" + ftype + "&fid=" + fid);
        }
        function postDigg(ftype, aid) {
            var taget_obj = document.getElementById('newdigg');
            var saveid = GetCookie('diggid');
            if (saveid != null) {
                var saveids = saveid.split(',');
                var hasid = false;
                saveid = '';
                j = 1;
                for (i = saveids.length - 1; i >= 0; i--) {
                    if (saveids[i] == aid && hasid) continue;
                    else {
                        if (saveids[i] == aid && !hasid) hasid = true;
                        saveid += (saveid == '' ? saveids[i] : ',' + saveids[i]);
                        j++;
                        if (j == 20 && hasid) break;
                        if (j == 19 && !hasid) break;
                    }
                }
                if (hasid) {
                    alert("您已经顶过该帖，请不要重复顶帖 ！");
                    return;
                }
                else saveid += ',' + aid;
                SetCookie('diggid', saveid, 1);
            }
            else {
                SetCookie('diggid', aid, 1);
            }
            myajax = new DedeAjax(taget_obj, false, false, '', '', '');
            var url = "/plus/digg_ajax.php?action=" + ftype + "&id=" + aid;
            myajax.SendGet2(url);
        }
        function getDigg(aid) {
            var taget_obj = document.getElementById('newdigg');
            myajax = new DedeAjax(taget_obj, false, false, '', '', '');
            myajax.SendGet2("/plus/digg_ajax.php?id=" + aid);
            DedeXHTTP = null;
        }
        -->
    </script>
    <script type="text/javascript">

        function ILike(th, v) {
            if (v) {
                $(th).addClass("single_views_over");
            }
            else {
                $(th).removeClass("single_views_over");
            }
        }

    </script>

</head>
<body class="single2">
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
    <div id="wrapper">
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 1700px;
                    margin-top: 10px;">
                    <div class="path"><a href='#'>主页</a> >
                        <?php if(is_array($pos_cates) || $pos_cates instanceof \think\Collection || $pos_cates instanceof \think\Paginator): $i = 0; $__LIST__ = $pos_cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pos_cate): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('Artlist/artlist',array('cateid'=>$pos_cate['id'])); ?>"><?php echo $pos_cate['catename']; ?></a> >
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title">
                                    <span><?php echo $arts['title']; ?></span><span class="title_date"></span></h2>

                                <p class="single_info">时间：<?php echo date("Y-m-d H:i",$arts['time']); ?>&nbsp;&nbsp;&nbsp;编辑：<?php echo $arts['author']; ?></p>
                            </div>
                            <div class="div-content">
                                <?php echo $arts['content']; ?>
                                <p class="pagepage"></p>

                                <center id="pagenav">
                                </center>
                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">

                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a
                                                            class="jiathis_button_tqq"></a><a
                                                            class="jiathis_button_renren">
                                                    </a><a class="jiathis_button_kaixin001"></a><a
                                                            href="http://www.jiathis.com/share"
                                                            class="jiathis jiathis_txt jtico jtico_jiathis"
                                                            target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript"
                                                            src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                            charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="float: right; width: 60px; font-size: 12px;">
                                        分享至：
                                    </div>
                                    <div style="clear: both;">
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                            <div id="ctl00_ctl00_ContentPlaceHolder1_contentPlace_divRead">
                                <div style="text-align: left; width: 100%; border-bottom: solid 1px #e0e0e0; padding-bottom: 4px;
                                    color: Black; vertical-align: middle; font-weight: bold;">
                                    &nbsp;&nbsp;猜您喜欢的文章
                                </div>
                                <ul class="read" style="list-style-type: none; margin-top: 10px; width: 780px;">
                                    <li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;">
                                        <a href="/life/379.html" target="_blank"><img src="__PUBLIC__/images/342.jpg"
                                                                                      style="width: 250px; height: 150px; margin-bottom: 0px;"/>
                                            <span style="margin: 0px; padding: 0px; margin-top: -5px;">众里寻她千百度，蓦然回首，那景却在，延京深</span></a>
                                    </li>
                                    <li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;">
                                        <a href="/life/377.html" target="_blank"><img src="__PUBLIC__/images/336.jpg"
                                                                                      style="width: 250px; height: 150px; margin-bottom: 0px;"/>
                                            <span style="margin: 0px; padding: 0px; margin-top: -5px;">周末4+2出行 到北京怀柔喇叭沟门赏红叶</span></a>
                                    </li>
                                    <li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;">
                                        <a href="/life/363.html" target="_blank"><img src="__PUBLIC__/images/323.jpg"
                                                                                      style="width: 250px; height: 150px; margin-bottom: 0px;"/>
                                            <span style="margin: 0px; padding: 0px; margin-top: -5px;">周末随拍：北京单车生活</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="clear">
                            </div>
                            <div class="comments_wrap" style="margin-top: 35px;">
                                <a name="comment"></a>
                                <!-- Duoshuo Comment BEGIN -->
                                <div class="ds-thread" data-thread-key=""
                                     data-title="" data-author-key="" data-url=""></div>
                                <script type="text/javascript">
                                    var duoshuoQuery = {short_name: "dede58"};
                                    (function () {
                                        var ds = document.createElement('script');
                                        ds.type = 'text/javascript';
                                        ds.async = true;
                                        ds.src = 'http://static.duoshuo.com/embed.js';
                                        ds.charset = 'UTF-8';
                                        (document.getElementsByTagName('head')[0]
                                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                                    })();
                                </script>
                                <!-- Duoshuo Comment END -->
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="widget single" style="margin-bottom: 0px; margin-left: 0px; margin-top: 40px;
                    padding-bottom: 0px;" id="newdigg">
                    <div class="single_views" onmouseout="ILike(this,false)" onmouseover="ILike(this,true)">
                        <span class="textcontainer"><span class="votecount26536">0</span></span> <span
                            class="bartext voteid26536"><a href="#"
                                                           id="aZanImg"
                                                           onclick="javascript:postDigg('good',382)"></a></span><span
                            class="text" id="spanZan">赞</span>
                        <span class="text love">人</span>
                    </div>


                </div>
                <script language="javascript" type="text/javascript">getDigg(382);</script>
                <!-- 右侧 -->

                <div class="widget">

                    <div style="background: url('__PUBLIC__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                    </div>
                    <ul id="ulHot">
                        <?php if(is_array($hotArts) || $hotArts instanceof \think\Collection || $hotArts instanceof \think\Paginator): $i = 0; $__LIST__ = $hotArts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotArt): $mod = ($i % 2 );++$i;?>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('Article/article',array('artid'=>$hotArt['id'])); ?>" target="_blank"><img src="__IMG__/<?php echo $hotArt['thumb']; ?>" width="83" title="<?php echo $hotArt['title']; ?>"/></a>
                            </div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('Article/article',array('artid'=>$hotArt['id'])); ?>" target="_blank" title="<?php echo $hotArt['title']; ?>"><?php echo $hotArt['title']; ?></a>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/378.html"
                                                                                                target="_blank"><img
                                    src="__PUBLIC__/images/335.jpg" width="83" title="深圳设计师浩子和77的11天成都-稻城自虐骑行"/></a>
                            </div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/378.html"
                                                                                                  target="_blank"
                                                                                                  title="深圳设计师浩子和77的11天成都-稻城自虐骑行">深圳设计师浩子和77的11天成都-稻城自虐骑行</a>
                            </div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/389.html"
                                                                                                target="_blank"><img
                                    src="__PUBLIC__/images/347.jpg" width="83" title="执着的小辫与西藏的骑车旅行"/></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/389.html"
                                                                                                  target="_blank"
                                                                                                  title="执着的小辫与西藏的骑车旅行">执着的小辫与西藏的骑车旅行</a>
                            </div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/388.html"
                                                                                                target="_blank"><img
                                    src="__PUBLIC__/images/351.jpg" width="83" title="玄白朱单骑英国第二季 芒特索洛尔骑行"/></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/388.html"
                                                                                                  target="_blank"
                                                                                                  title="玄白朱单骑英国第二季 芒特索洛尔骑行">玄白朱单骑英国第二季
                                芒特索洛尔骑行</a></div>
                        </li>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/382.html"
                                                                                                target="_blank"><img
                                    src="__PUBLIC__/images/345.jpg" width="83" title="子弹传球：北京-香港4000多公里单车寻爱之旅"/></a>
                            </div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/382.html"
                                                                                                  target="_blank"
                                                                                                  title="子弹传球：北京-香港4000多公里单车寻爱之旅">子弹传球：北京-香港4000多公里单车寻爱之旅</a>
                            </div>
                        </li>-->
                    </ul>
                </div>

                <div class="widget portrait">
                    <div>
                        <div class="textwidget">
                            <a href="/tougao.html"><img src="__PUBLIC__/images/tg.jpg" alt="鎶曠ǹ"></a><br><br>
                            <script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
                            <script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
                            <script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
                        </div>
                    </div>
                </div>


            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="__PUBLIC__/style/z700bike_global.js"></script>
    <script type="text/javascript" src="__PUBLIC__/style/z700bike_single.js"></script>

    <script type='text/javascript' src='__PUBLIC__/style/jquery.colorbox-min.js?ver=1.3.17.2'></script>


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
