<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\wamp\www\bick\public/../application/index\view\artlist\artlist.html";i:1493362169;s:68:"D:\wamp\www\bick\public/../application/index\view\common\header.html";i:1494468847;s:68:"D:\wamp\www\bick\public/../application/index\view\common\footer.html";i:1493713848;}*/ ?>
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
    <div id="xh_container">
        <div id="xh_content">
            <div class="path"><a href='#'>主页</a> >
                <?php if(is_array($pos_cates) || $pos_cates instanceof \think\Collection || $pos_cates instanceof \think\Paginator): $i = 0; $__LIST__ = $pos_cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pos_cate): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('Artlist/artlist',array('cateid'=>$pos_cate['id'])); ?>"><?php echo $pos_cate['catename']; ?></a> >
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
                <?php if(is_array($arts) || $arts instanceof \think\Collection || $arts instanceof \think\Paginator): $i = 0; $__LIST__ = $arts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>" title="<?php echo $art['title']; ?>">
                            <img src="__IMG__/<?php echo $art['thumb']; ?>" alt="<?php echo $art['title']; ?>" height="240" width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>" title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a>
                        </h2>
                        <span class="time"><?php echo date("Y年m月d日",$art['time']); ?></span>
                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            <?php echo $art['desc']; ?>
                        </div>
                        <div class="b">
                            <a href="<?php echo url('Article/article',array('artid'=>$art['id'])); ?>" class="xh_readmore" rel="nofollow">readmore</a>
                            <span title="<?php echo $art['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $art['zan']; ?></span>
                            </span> </span> <span title="<?php echo $art['click']; ?>人浏览" class="xh_views"><?php echo $art['click']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/small/200.html" title="Tyrell唯一的折叠小径车Tyrell FX">
                            <img src="__PUBLIC__/images/160.jpg" alt="Tyrell唯一的折叠小径车Tyrell FX" height="240" width="400"></a>
                    </div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/small/200.html" title="Tyrell唯一的折叠小径车Tyrell FX">Tyrell唯一的折叠小径车Tyrell
                                FX</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            来自日本的Tyrell公司一直以生产高端轻量化小径车和顶级零配件著称，除了像AM-7这样的顶级小径车轮组，Tyrell的整车更是实力非凡，旗下产品诸如采用钛合金车架的20寸451轮组的“PK”系...

                        </div>
                        <div class="b">
                            <a href="/lookbike/small/200.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="0人赞" class="xh_love"><span
                                class="textcontainer"><span>0</span></span> </span> <span title="102人浏览"
                                                                                          class="xh_views">
                                                    102</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/mountainbike/160.html" title="登山新伙伴 全球限量80台的奔驰山地车">
                            <img src="__PUBLIC__/images/120.jpg" alt="登山新伙伴 全球限量80台的奔驰山地车" height="240" width="400"></a>
                    </div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/mountainbike/160.html" title="登山新伙伴 全球限量80台的奔驰山地车">登山新伙伴
                                全球限量80台的奔驰山地车</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            梅赛德斯-奔驰的造车技术一向优质毋庸置疑，同样的投身山地车制造方面也能让大家感受到科技和设计之美，2012限定版山地车已经可以通过当地的奔驰经销商订货购买。

                        </div>
                        <div class="b">
                            <a href="/lookbike/mountainbike/160.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="0人赞" class="xh_love"><span
                                class="textcontainer"><span>0</span></span> </span> <span title="157人浏览"
                                                                                          class="xh_views">
                                                    157</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/roadbicycle/120.html"
                           title="Rapha Continental x Vandeyk 联名手工车款">
                            <img src="__PUBLIC__/images/80.jpg" alt="Rapha Continental x Vandeyk 联名手工车款" height="240"
                                 width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/roadbicycle/120.html"
                               title="Rapha Continental x Vandeyk 联名手工车款">Rapha Continental x Vandeyk 联名手工车款</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            英国单车服事配件品牌 Rapha，与美国知名的创意公路赛 Rapha Continental 找来德国单车品牌 Vandeyk 联手，发表一系列联名款单车，全由德国师傅手工打造而成。

                        </div>
                        <div class="b">
                            <a href="/lookbike/roadbicycle/120.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="0人赞" class="xh_love"><span
                                class="textcontainer"><span>0</span></span> </span> <span title="181人浏览"
                                                                                          class="xh_views">
                                                    181</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/vintagebicycle/80.html"
                           title="硬朗骑士归来，NEIGHBORHOOD 2013秋冬型录一览">
                            <img src="__PUBLIC__/images/40.jpg" alt="硬朗骑士归来，NEIGHBORHOOD 2013秋冬型录一览" height="240"
                                 width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/vintagebicycle/80.html"
                               title="硬朗骑士归来，NEIGHBORHOOD 2013秋冬型录一览">硬朗骑士归来，NEIGHBORHOOD 2013秋冬型录一览</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            作为潮流界的硬汉，NEIGHBORHOOD其每一件的单品都给人以干净，利落，硬朗的印象。当然了，此次NEIGHBORHOOD推出的2013秋冬型录自然也不例外。

                        </div>
                        <div class="b">
                            <a href="/lookbike/vintagebicycle/80.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="1人赞" class="xh_love"><span
                                class="textcontainer"><span>1</span></span> </span> <span title="171人浏览"
                                                                                          class="xh_views">
                                                    171</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/fixed-gear/40.html"
                           title="[大视野] 固齿公开赛现场 全国fixed gear车友单车及装备展示">
                            <img src="__PUBLIC__/images/40.jpg" alt="[大视野] 固齿公开赛现场 全国fixed gear车友单车及装备展示" height="240"
                                 width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/fixed-gear/40.html"
                               title="[大视野] 固齿公开赛现场 全国fixed gear车友单车及装备展示">[大视野] 固齿公开赛现场 全国fixed gear车友单车及装备展示</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            图中为全国fixed gear车友单车及装备，每年的固齿公开赛就像一场豪华的死飞展会，今年男伙伴里钟情粉色系，女伙伴们热爱黑色系，这世界变化了。

                        </div>
                        <div class="b">
                            <a href="/lookbike/fixed-gear/40.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="6人赞" class="xh_love"><span
                                class="textcontainer"><span>6</span></span> </span> <span title="68人浏览"
                                                                                          class="xh_views">
                                                    68</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/otherbike/279.html"
                           title="意大利品牌Diesel&amp;Pinarello城市车首次亮相上海自行车展">
                            <img src="__PUBLIC__/images/239.jpg" alt="意大利品牌Diesel&amp;Pinarello城市车首次亮相上海自行车展"
                                 height="240" width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/otherbike/279.html"
                               title="意大利品牌Diesel&amp;Pinarello城市车首次亮相上海自行车展">意大利品牌Diesel&amp;Pinarello城市车首次亮相上海自行车展</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">

                            意大利Pinarello自行车品牌和Diesel潮牌2012年的合作诞生了名为Only the Brave的全新城市车，成为业界最为激动人心的新品。Only the
                            Brave单速城市车使用热油...

                        </div>
                        <div class="b">
                            <a href="/lookbike/otherbike/279.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="1人赞" class="xh_love"><span
                                class="textcontainer"><span>1</span></span> </span> <span title="150人浏览"
                                                                                          class="xh_views">
                                                    150</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/otherbike/280.html" title="自行车中阿斯顿·马丁 至简至美Budnitz城市自行车">
                            <img src="__PUBLIC__/images/240.jpg" alt="自行车中阿斯顿·马丁 至简至美Budnitz城市自行车" height="240"
                                 width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/otherbike/280.html" title="自行车中阿斯顿·马丁 至简至美Budnitz城市自行车">自行车中阿斯顿·马丁
                                至简至美Budnitz城市自行车</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">

                            Budnitz自行车品牌创立于2010年，在当年NAHBS大展上横空出世，获得“自行车中阿斯顿·马丁”的美誉，Budnitz试图用钛和铬钼钢打造世界上最简捷最快

                        </div>
                        <div class="b">
                            <a href="/lookbike/otherbike/280.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="1人赞" class="xh_love"><span
                                class="textcontainer"><span>1</span></span> </span> <span title="104人浏览"
                                                                                          class="xh_views">
                                                    104</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/otherbike/278.html" title="标致设计实验室力作概念单车 Peugeot Onyx bike">
                            <img src="__PUBLIC__/images/238.jpg" alt="标致设计实验室力作概念单车 Peugeot Onyx bike" height="240"
                                 width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/otherbike/278.html"
                               title="标致设计实验室力作概念单车 Peugeot Onyx bike">标致设计实验室力作概念单车 Peugeot Onyx bike</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">

                            标致设计实验室一直很高效，他们曾设计过eDL132电动单车，Pleyel钢琴等等，这是他们的Onyx系概念自行车，简洁、动感、超棒空气动力学优化设计，重金属感十足。

                        </div>
                        <div class="b">
                            <a href="/lookbike/otherbike/278.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="0人赞" class="xh_love"><span
                                class="textcontainer"><span>0</span></span> </span> <span title="114人浏览"
                                                                                          class="xh_views">
                                                    114</span>
                        </div>
                    </div>
                </div>
                <div class="xh_post_h_3 ofh">
                    <div class="xh">
                        <a target="_blank" href="/lookbike/otherbike/277.html"
                           title="NEIGHBORHOOD x 4ING 联合推出儿童自行车Kick Bike">
                            <img src="__PUBLIC__/images/237.jpg" alt="NEIGHBORHOOD x 4ING 联合推出儿童自行车Kick Bike"
                                 height="240" width="400"></a></div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                            <a target="_blank" href="/lookbike/otherbike/277.html"
                               title="NEIGHBORHOOD x 4ING 联合推出儿童自行车Kick Bike">NEIGHBORHOOD x 4ING 联合推出儿童自行车Kick Bike</a>
                        </h2>
                        <span class="time">2014年02月06日</span>

                        <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">

                            这台自行车特别为 2 至 5 岁的孩童而设，以 NEIGHBORHOOD 一贯的暗黑风格设计，车身印有品牌的标志字体，而骷髅骨头标志就印在座椅，就连孩童都能够感受
                            NEIGHBORHOOD 个中...

                        </div>
                        <div class="b">
                            <a href="/lookbike/otherbike/277.html" class="xh_readmore" rel="nofollow">read
                                more</a> <span title="0人赞" class="xh_love"><span
                                class="textcontainer"><span>0</span></span> </span> <span title="104人浏览"
                                                                                          class="xh_views">
                                                    104</span>
                        </div>
                    </div>
                </div>-->

                <div id="pagination">
                    <div class="wp-pagenavi">
                        <?php echo $arts->render(); ?>
                       <!-- <span class="current">1</span>
                        <a class="page larger" href='list_2.html'>2</a>
                        <a class="page larger" href='list_3.html'>3</a>
                        <a class="page larger" href='list_4.html'>4</a>
                        <a class="page larger" href='list_5.html'>5</a>
                        <a class="page larger" href='list_6.html'>6</a>
                        <a class="page larger" href='list_7.html'>7</a>
                        <a class="page larger" href='list_8.html'>8</a>
                        <a class="page larger" href='list_9.html'>9</a>
                        <a class="page larger" href='list_10.html'>10</a>
                        <a class="page larger" href='list_11.html'>11</a>
                        <a class="page larger" href='list_2.html'>下一页</a>
                        <a class="page larger" href='list_28.html'>末页</a>
                        <span class="pages">共 28 页，280条</span>-->
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
                    <?php if(is_array($hotArts) || $hotArts instanceof \think\Collection || $hotArts instanceof \think\Paginator): $i = 0; $__LIST__ = $hotArts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotArt): $mod = ($i % 2 );++$i;?>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;">
                            <a href="<?php echo url('Article/article',array('artid'=>$hotArt['id'])); ?>" target="_blank">
                            <img src="__IMG__/<?php echo $hotArt['thumb']; ?>" width="83" title="<?php echo $hotArt['title']; ?>"/>
                            </a>
                        </div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;">
                            <a href="<?php echo url('Article/article',array('artid'=>$hotArt['id'])); ?>" target="_blank" title="<?php echo $hotArt['title']; ?>"><?php echo $hotArt['title']; ?></a></div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a
                                href="/lookbike/small/184.html" target="_blank"><img src="__PUBLIC__/images/146.jpg"
                                                                                     width="83"
                                                                                     title="英式折叠车Brompton Junction 上海旗舰店"/></a>
                        </div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a
                                href="/lookbike/small/184.html" target="_blank" title="英式折叠车Brompton Junction 上海旗舰店">英式折叠车Brompton
                            Junction 上海旗舰店</a></div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a
                                href="/lookbike/vintagebicycle/57.html" target="_blank"><img
                                src="__PUBLIC__/images/17.jpg" width="83" title="延时胶片摄影：上海复古骑行大会"/></a></div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a
                                href="/lookbike/vintagebicycle/57.html" target="_blank" title="延时胶片摄影：上海复古骑行大会">延时胶片摄影：上海复古骑行大会</a>
                        </div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a
                                href="/lookbike/small/199.html" target="_blank"><img src="__PUBLIC__/images/159.jpg"
                                                                                     width="83"
                                                                                     title="Brompton小布2012女王纪念版"/></a>
                        </div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a
                                href="/lookbike/small/199.html" target="_blank" title="Brompton小布2012女王纪念版">Brompton小布2012女王纪念版</a>
                        </div>
                    </li>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;"><a
                                href="/lookbike/bmx/213.html" target="_blank"><img src="__PUBLIC__/images/181.png"
                                                                                   width="83"
                                                                                   title="街头气息十足 Stussy 2013 秋冬系列新品LOOKBOOK"/></a>
                        </div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;"><a
                                href="/lookbike/bmx/213.html" target="_blank" title="街头气息十足 Stussy 2013 秋冬系列新品LOOKBOOK">街头气息十足
                            Stussy 2013 秋冬系列新品LOOKB</a></div>
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