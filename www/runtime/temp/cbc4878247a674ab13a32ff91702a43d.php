<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:38:"./template/pc/rainbow/index\index.html";i:1506321332;}*/ ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>"/>
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/alone_index.css"/>
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__PUBLIC__/js/global.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/static/images/favicon.ico" media="screen"/>
    <!-- 新浪获取ip地址 -start-->
    <?php if(\think\Cookie::get('province_id') <= 0): ?>
        <script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=<?php echo \think\Request::instance()->ip(); ?>"></script>
        <script type="text/JavaScript">
            doCookieArea(remote_ip_info);
        </script>
    <?php endif; ?>
</head>
<body class="gray_f5">
    <!--header-s-->
    <div class="tpshop-tm-hander tp_h_alone p">
        <!--导航栏-s-->
        <div class="top-hander p">
            <div class="w1224 pr p">
                <div class="fl">
                    <!-- 收货地址，物流运费 -start-->
                    <link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
                    <!--<div class="sendaddress pr fl">-->
                        <!--<span>送货至：</span>-->
                        <!--<span>-->
                            <!--<ul class="list1">-->
                                <!--<li class="summary-stock though-line">-->
                                    <!--<div class="dd" style="border-right:0px;width:200px;">-->
                                        <!--<div class="store-selector add_cj_p">-->
                                            <!--<div class="text"><div></div><b></b></div>-->
                                            <!--<div onclick="$(this).parent().removeClass('hover')" class="close"></div>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</span>-->
                    <!--</div>-->
                    <!-- 收货地址，物流运费 -end-->
                        <div class="fl nologin">
                            <!--<span>你好，欢迎来到车享惠！| 24小时免费电话：400-1166-167</span>-->
                            <a href="<?php echo U('Home/user/login'); ?>">Hi.你好,请登录！</a>
                            <!--<a href="<?php echo U('Home/user/reg'); ?>">免费注册</a>-->
                        </div>
                        <div class="fl islogin" style="color: #ccc;">
                            [<a class="userinfo" href="<?php echo U('Home/user/index'); ?>" style="color: #ccc;"></a>]
                            <span style="color: #666;">|</span>
                            <a  href="<?php echo U('Home/user/logout'); ?>"  title="退出" target="_self" style="color: #aaa;">[安全退出]</a>
                        </div>
                </div>
                <div class="top-ri-header fr">
                    <ul>
                        <li><a target="_blank" href="http://www.newcxh.com/index.php/Login/index.html">会员中心</a></li>
                    <li class="spacer"></li>
                    <li><a target="_blank" href="<?php echo U('Home/user/index'); ?>">商城中心</a></li>
                    <li class="spacer"></li>
                        <!--<li><a target="_blank" href="<?php echo U('Home/User/visit_log'); ?>">我的浏览</a></li>
                        <li class="spacer"></li>
                        <li><a target="_blank" href="<?php echo U('/Home/User/coupon'); ?>">我的优惠券</a></li>
                        <li class="spacer"></li>-->
                        <li><a target="_blank" href="<?php echo U('/Home/User/goods_collect'); ?>">我的收藏</a></li>
                        <!--<li class="spacer"></li>
                        <li><a target="_blank" title="点击这里给我发消息" href="<?php echo U('Home/Article/detail',array('article_id'=>22)); ?>" target="_blank">在线客服</a></li>
                        <li class="spacer"></li>
                        <li class="hover-ba-navdh">
                            <div class="nav-dh">
                                <span>网站导航</span>
                                <i class="share-a_a1"></i>
                                <div class="conta-hv-nav">
                                    <ul>
                                        <li>
                                            <a href="<?php echo U('Home/Activity/group_list'); ?>">团购</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Home/Activity/flash_sale_list'); ?>">抢购</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!--导航栏-e-->
        <div class="nav-middan-z p">
            <div class="header w1224 p">
                <div class="ecsc-logo">
                    <a href="<?php echo U('Index/index'); ?>" class="logo"> <img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>"></a>
                </div>
                <!--搜索-s-->
                <div class="ecsc-search">
                    <form id="searchForm" name="" method="get" action="<?php echo U('Home/Goods/search'); ?>" class="ecsc-search-form">
                        <input autocomplete="off" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>" placeholder="搜索关键字" class="ecsc-search-input">
                        <button type="submit" class="ecsc-search-button" onclick="if($.trim($('#q').val()) != '') $('#searchForm').submit();"><i></i></button>
                        <div class="candidate p">
                            <ul id="search_list"></ul>
                        </div>
                        <script type="text/javascript">
                            ;(function($){
                                $.fn.extend({
                                    donetyping: function(callback,timeout){
                                        timeout = timeout || 1e3;
                                        var timeoutReference,
                                                doneTyping = function(el){
                                                    if (!timeoutReference) return;
                                                    timeoutReference = null;
                                                    callback.call(el);
                                                };
                                        return this.each(function(i,el){
                                            var $el = $(el);
                                            $el.is(':input') && $el.on('keyup keypress',function(e){
                                                if (e.type=='keyup' && e.keyCode!=8) return;
                                                if (timeoutReference) clearTimeout(timeoutReference);
                                                timeoutReference = setTimeout(function(){
                                                    doneTyping(el);
                                                }, timeout);
                                            }).on('blur',function(){
                                                doneTyping(el);
                                            });
                                        });
                                    }
                                });
                            })(jQuery);

                            $('.ecsc-search-input').donetyping(function(){
                                search_key();
                            },500).focus(function(){
                                var search_key = $.trim($('#q').val());
                                if(search_key != ''){
                                    $('.candidate').show();
                                }
                            });
                            $('.candidate').mouseleave(function(){
                                $(this).hide();
                            });

                            function searchWord(words){
                                $('#q').val(words);
                                $('#searchForm').submit();
                            }
                            function search_key(){
                                var search_key = $.trim($('#q').val());
                                if(search_key != ''){
                                    $.ajax({
                                        type:'post',
                                        dataType:'json',
                                        data: {key: search_key},
                                        url:"<?php echo U('Home/Api/searchKey'); ?>",
                                        success:function(data){
                                            if(data.status == 1){
                                                var html = '';
                                                $.each(data.result, function (n, value) {
                                                    html += '<li onclick="searchWord(\''+value.keywords+'\');"><div class="search-item">'+value.keywords+'</div><div class="search-count">约'+value.goods_num+'个商品</div></li>';
                                                });
                                                html += '<li class="close"><div class="search-count">关闭</div></li>';
                                                $('#search_list').empty().append(html);
                                                $('.candidate').show();
                                            }else{
                                                $('#search_list').empty();
                                            }
                                        }
                                    });
                                }
                            }
                        </script>
                    </form>
                    <div class="keyword">
                        <ul>
                            <?php if(is_array($tpshop_config['hot_keywords']) || $tpshop_config['hot_keywords'] instanceof \think\Collection || $tpshop_config['hot_keywords'] instanceof \think\Paginator): if( count($tpshop_config['hot_keywords'])==0 ) : echo "" ;else: foreach($tpshop_config['hot_keywords'] as $k=>$wd): ?>
                                <li>
                                    <a href="<?php echo U('Home/Goods/search',array('q'=>$wd)); ?>" target="_blank"><?php echo $wd; ?></a>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <!--搜索-e-->
                <!--购物车-s-->
                
                <div class="shopingcar-index fr">
                    <div class="u-g-cart fr fixed" id="hd-my-cart">
                        <a href="<?php echo U('Home/Cart/cart'); ?>">
                            <div class="c-n fl" >
                                <i class="share-shopcar-index"></i>
                                <span>我的购物车<em class="sc_z" id="cart_quantity"></em></span>
                            </div>
                        </a>
                        <div class="u-fn-cart u-mn-cart" id="show_minicart"></div>
                    </div>
                </div>
                
                <!--购物车-e-->
            </div>
        </div>
        <!--商品分类-s-->
        <div class="nav p">
            <div class="w1224 p">
                <div class="categorys2 home_categorys">
                    <div class="dt dt01">
                        <a href="<?php echo U('Home/Goods/all_category'); ?>" target="_blank"><i class="share-a_a2"></i>全部商品分类</a>
                    </div>
                    <!--全部商品分类-s-->
                    <div class="dd dd01">
                        <div class="cata-nav">
                            <!-- 外层循环点-->
                            <?php if(is_array($goods_category_tree) || $goods_category_tree instanceof \think\Collection || $goods_category_tree instanceof \think\Paginator): if( count($goods_category_tree)==0 ) : echo "" ;else: foreach($goods_category_tree as $k=>$v): ?>
                            <div class="item fore1">
                                <?php if($v[level] == 1): ?>
                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-<?php echo $k; ?>"></span></div>
                                            <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v[id])); ?>" title="<?php echo $v[name]; ?>"><?php echo $v[name]; ?></a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                <?php endif; ?>
                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                            <?php if(is_array($v['tmenu']) || $v['tmenu'] instanceof \think\Collection || $v['tmenu'] instanceof \think\Paginator): if( count($v['tmenu'])==0 ) : echo "" ;else: foreach($v['tmenu'] as $k2=>$v2): if($v2[parent_id] == $v['id']): ?>
                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>" target="_blank"><?php echo $v2[name]; ?><i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                        <?php if(is_array($v2['sub_menu']) || $v2['sub_menu'] instanceof \think\Collection || $v2['sub_menu'] instanceof \think\Paginator): if( count($v2['sub_menu'])==0 ) : echo "" ;else: foreach($v2['sub_menu'] as $k3=>$v3): if($v3[parent_id] == $v2['id']): ?>
                                                            <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id])); ?>" target="_blank"><?php echo $v3[name]; ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                    </dd>
                                                </dl>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            <!--商品分类底部广告-s-->
                                            <!--<div class="advertisement_down">-->
                                                <!--<ul>                                                -->
                                                    <!--<?php $pid =14;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v3):       
    
    $v3[position] = $ad_position[$v3[pid]]; 
    if(I("get.edit_ad") && $v3[not_adv] == 0 )
    {
        $v3[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v3[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v3[ad_id]";        
        $v3[title] = $ad_position[$v3[pid]][position_name]."===".$v3[ad_name];
        $v3[target] = 0;
    }
    ?>-->
                                                        <!--<li>-->
                                                            <!--<a href="<?php echo $v3[ad_link]; ?>" <?php if($v3['target'] == 1): ?>target="_blank"<?php endif; ?>>-->
                                                                <!--<img src="<?php echo $v3[ad_code]; ?>" title="<?php echo $v3[title]; ?>" style="<?php echo $v3[style]; ?>" width="129" height="45"/>-->
                                                            <!--</a>-->
                                                        <!--</li>-->
                                                    <!--<?php endforeach; ?>                                                -->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                        <?php $pid =51;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                                            <a href="<?php echo $v[ad_link]; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>>
                                                <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <!--全部商品分类-e-->
                </div>
                
                <!--导航栏-s-->
                <div class="navitems" id="nav">
                    <ul>
                        <li class="index_modify">
                            <a href="<?php echo U('Index/index'); ?>" class="selected">首页</a>
                        </li>
                        <?php
                                   
                                $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                            <li class="page"><a href="<?php echo $v[url]; ?>" <?php if($v[is_new] == 1): ?>target="_blank" <?php endif; ?><span><?php echo $v[name]; ?></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--导航栏-e-->
            </div>
        </div>
        <!--商品分类-e-->
    </div>
    <!--header-e-->
    <!--轮播图-s-->
    <div id="myCarousel" class="carousel slide p header-tp" data-ride="carousel">
        <ol class="carousel-indicators">

        </ol>
        <div class="carousel-inner">
        	<?php $adk = '1'; $pid =2;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("5")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 5- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v1):       
    
    $v1[position] = $ad_position[$v1[pid]]; 
    if(I("get.edit_ad") && $v1[not_adv] == 0 )
    {
        $v1[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v1[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v1[ad_id]";        
        $v1[title] = $ad_position[$v1[pid]][position_name]."===".$v1[ad_name];
        $v1[target] = 0;
    }
    ?>
                <div class="item <?php if($adk++ == 1): ?>active<?php endif; ?>" style="background:<?php echo $v['bgcolor']; ?>;">
                    <a href="<?php echo $v1[ad_link]; ?>"  <?php if($v1['target'] == 1): ?>target="_blank"<?php endif; ?>>
                        <img width="100%;" height="500px;" src="<?php echo $v1[ad_code]; ?>" title="<?php echo $v1[title]; ?>" style="<?php echo $v1[style]; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        <!--轮播图右侧广告-s-->
        <!--<div class="adcertiserment_head">-->
            <!--<div class="w1224">-->
                <!--<ul>-->
                    <!--&lt;!&ndash;<?php $pid =52;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("2")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 2- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>&ndash;&gt;-->
                        <!--&lt;!&ndash;<li>&ndash;&gt;-->
                            <!--&lt;!&ndash;<a href="<?php echo $v[ad_link]; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>>&ndash;&gt;-->
                            <!--&lt;!&ndash;<img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/>&ndash;&gt;-->
                            <!--&lt;!&ndash;</a>&ndash;&gt;-->
                        <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<?php endforeach; ?>&ndash;&gt;-->
                <!--</ul>-->
            <!--</div>-->
        <!--</div>-->
        <!--轮播图右侧广告-e-->
    </div>
    <!--轮播图下文章-e-->
    <div class="new">
        <ul>
        	
            <li>
                <i></i>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"  target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>" style="margin-left: 50px;" target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <i></i>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"  target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>" style="margin-left: 50px;" target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <i></i>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"  target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>   
            <li>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>" style="margin-left: 50px;" target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
    	+function(){
    		var int=setInterval(sint,4000);
    		var i=0;
    		function sint(){
				var zh=($(".new li").length+1)/2;
				var h=parseFloat($(".new").css("height"));
    			var marginTop=(-h*i)+"px";
	    		$(".new ul").animate({
	    			marginTop:marginTop
	    		},1000,function(){
	    			i++;
	    			if(i>=zh-1){
	    				$(".new ul").css({marginTop:0});
	    				return i=1;
	    			}
	    		});
    		}
    	}();
    </script>
    <!--轮播图底部广告-s-->
    <div class="adv3 p">
        <div class="adv3_fl">
        	<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id=2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id=2"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
        		<a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>" target="_blank">
	                <!--<i class="glyphicon glyphicon-link" style="color: #fff;"></i>-->
	                <span style=" line-height: 80px;"><?php echo $v[cat_name]; ?></span>
	            </a>
                <!--<div class="hc-column-box">
                    <h2><a href="" target="_self"><?php echo $v[cat_name]; ?></a></h2>
                    <ul>
                        <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]"); 
                                    S("sql_".$md5_key,$sql_result_v2,86400);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                            <li><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>-->
            <?php endforeach; ?>
            <!--<a href="" target="_blank">
                <img src="__STATIC__/images/zxhd-ico1.png" alt="">
                <span><?php echo $v[cat_name]; ?></span>
            </a>
            <a href="" target="_blank">
                <img src="__STATIC__/images/zxhd-ico1.png" alt="">
                <span>购物指南</span>
            </a>
            <a href="" target="_blank">
                <img src="__STATIC__/images/zxhd-ico1.png" alt="">
                <span>社区活动</span>
            </a>
            <a href="" target="_blank">
                <img src="__STATIC__/images/zxhd-ico1.png" alt="">
                <span>电子发票</span>
            </a>-->
        </div>
        <div class="adv3_fr">
            <ul>
                <?php $pid =53;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("3")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 3- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                    <li>
                        <a href="<?php echo $v[ad_link]; ?>" target="_blank">
                            <img src="<?php echo $v[ad_code]; ?>" title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!--轮播图底部广告-e-->
    <div class="adver_line">
        <div class="w1224">
            <?php $pid =3;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
                <a href="<?php echo $v['ad_link']; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>>
                <img src="<?php echo $v['ad_code']; ?>" width="1200" height="160"  title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

<!--------楼层-开始-------------->
    <?php if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): if( count($cateList)==0 ) : echo "" ;else: foreach($cateList as $k=>$v): ?>
    <!--商品楼层-s-->
        <div class="layer-floor " id="floor<?php echo $k+1; ?>">
            <div class="w1224">
            <div class="top_title_layer p">
                <div class="top_title_layer_fl">
                    <em></em>
                    <div class="part-title"><?php echo $v[name]; ?></div>
                    <span> / New Energy</span>
                     <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>">查看更多></a>
                </div>
                <div class="part-hot">
                    <ul>
                        <?php if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection || $v[tmenu] instanceof \think\Paginator): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): ?>
                            <li>
                                <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2[name]; ?></a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="main_layer p">
                <div class="hoste_le">  
					<?php $adk_arr = $v['id']+10; $pid =$adk_arr;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1507532400 and end_time > 1507532400 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v2):       
    
    $v2[position] = $ad_position[$v2[pid]]; 
    if(I("get.edit_ad") && $v2[not_adv] == 0 )
    {
        $v2[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v2[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v2[ad_id]";        
        $v2[title] = $ad_position[$v2[pid]][position_name]."===".$v2[ad_name];
        $v2[target] = 0;
    }
    ?>
                        <a class="big_adve" href="<?php echo $v2['ad_link']; ?>" <?php if($v2['target'] == 1): ?>target="_blank"<?php endif; ?>>
                        <img src="<?php echo $v2['ad_code']; ?>" width="240" height="820"  title="<?php echo $v2[title]; ?>" style="<?php echo $v2[style]; ?>"/>
                        </a>
                    <?php endforeach; ?>                    
                </div>
                <div class="hoste_ri">
                    <ul>
                        <?php if(is_array($v[hot_goods]) || $v[hot_goods] instanceof \think\Collection || $v[hot_goods] instanceof \think\Paginator): if( count($v[hot_goods])==0 ) : echo "" ;else: foreach($v[hot_goods] as $gk=>$g): if($gk < 6): ?>
                                <li>
                                    <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$g[goods_id])); ?>">
                                        <img class="picture_main" src="<?php echo goods_thum_images($g[goods_id],223,223); ?>"/>
                                        <span class="name_main"><?php echo getSubstr($g[goods_name],0,15); ?></span>
                                        <span class="menu_main"><?php echo getSubstr($g[goods_remark],0,15); ?></span>
                                        <!--<span class="intro_main"><?php echo $g[name]; ?></span>-->
                                        <span class="price_main"><i>￥</i><?php echo $g[shop_price]; ?></span>
                                    </a>
                                </li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    <!--商品楼层-e-->
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <!--楼层导航-s-->
    <div class="floornav_left">
        <ul>
            <?php if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): if( count($cateList)==0 ) : echo "" ;else: foreach($cateList as $k=>$v): ?>
                <li class="elevators">
                    <a ><?php echo $k+1; ?>F<span class="cofin_floor"><?php echo $v['mobile_name']; ?></span></a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!--楼层导航-e-->
<!--------楼层-结束-------------->

    <!--footer-s-->
    <div class="foot-alone tp_h_alone">
        </div>
        <!--<div class="foot-main">-->
            <!--<div class="w1224">-->
                <!--<div class="sum_main">-->
                    <!--<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>-->
                        <!--<dl class="foot-con">-->
                            <!--<dt><?php echo $v[cat_name]; ?></dt>-->
                            <!--<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,86400);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>-->
                            <!--<dd>-->
                                <!--<a target="_blank" href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a>-->
                            <!--</dd>-->
                            <!--<?php endforeach; ?>-->
                        <!--</dl>-->
                    <!--<?php endforeach; ?>-->
                    <!--<dl class="foot-con continue">-->
                        <!--<dt>联系我们</dt>-->
                        <!--<dd>-->
                            <!--<span class="cellphone_con"><?php echo $tpshop_config['shop_info_phone']; ?></span>-->
                            <!--<span class="time_con">周一至周日8:00-18:00</span>-->
                            <!--<span class="cost_con">（仅收市话费）</span>-->
                            <!--<a class="software_con" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq2']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">-->
                                <!--<img src="__STATIC__/images/continue.png"/>-->
                            <!--</a>-->
                        <!--</dd>-->
                    <!--</dl>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="foot-bottom">-->
            <!--<p>Copyright © 2016-2025 <?php echo (isset($tpshop_config['shop_info_store_name']) && ($tpshop_config['shop_info_store_name'] !== '')?$tpshop_config['shop_info_store_name']:'TPshop商城'); ?> 版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>-->
        <!--</div>-->
        <div class="bottom">
            <div class="bottom_center">
                <div class="bottom_center_slct">
                    <ul>
                        <li><a href="#">返回首页</a></li>
                        <li><a href="#">个人中心</a></li>
                        <li><a href="#">会员活动</a></li>
                        <li><a href="#">关于我们</a></li>
                        <li><a href="#">积分商城</a></li>
                        <li><a href="#">返回顶部</a></li>
                    </ul>
                </div>
                <div class="bottom_center_info">
                    <dl>
                        <dt><a href="#">帮助中心</a></dt>
                        <dd><a href="#">商家入驻</a></dd>
                        <dd><a href="#">商家帮助</a></dd>
                        <dd><a href="#">汽车帮助</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">服务支持</a></dt>
                        <dd><a href="#">商家保障</a></dd>
                        <dd><a href="#">质量保障</a></dd>
                        <dd><a href="#">意见反馈</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">车惠集团</a></dt>
                        <dd><a href="#">了解我们</a></dd>
                        <dd><a href="#">联系我们</a></dd>
                        <dd><a href="#">加入我们</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">关注我们</a></dt>
                        <dd><a href="#">官方微信</a></dd>
                        <dd><a href="#">官方微博</a></dd>
                    </dl>
                </div>
                <img src="__STATIC__/images/bottom_tel_03.png" class="bottom_center_info_pic"/>
                <img src="__STATIC__/images/bottom_ewm_03.png" class="bottom_center_info_ewm"/>
                <span class="bottom_center_info_ewm_txt">扫描二维码  关注官方微信<br>车享惠集团</span>
                <span class="bottom_center_info_wid" style="margin-top:280px;"><a href="#">关于车享</a> | <a href="#">网站首页</a> | <a href="#">网站地图</a> | <a href="#">联系我们</a> | <a href="#">积分商城</a> | <a href="#">会员商城</a></span>
                <span class="bottom_center_info_wid">Copyright © 2014 www.cxhnetwork.com  备案号：蜀ICP456455454号-1   联系电话:400-1166-167</span>
                <span class="bottom_center_info_wid">邮箱：scyljcgs@163.com 传真:0816-6147888 地址：体验中心地址：四川绵阳市涪城区龙门镇 邮编：100048</span>
                <div class="bottom_center_bt">
                    <img src="__STATIC__/images/bottom_bt_1_03.png"/>
                    <img src="__STATIC__/images/bottom_bt_2_03.png"/>
                    <img src="__STATIC__/images/bottom_bt_3_03.png"/>
                    <img src="__STATIC__/images/bottom_bt_4_03.png"/>
                    <img src="__STATIC__/images/bottom_bt_5_03.png"/>
                </div>
            </div>
        </div>
    </div>
    <!--侧边栏-s-->
    <div class="tp_h_alone">
        <div class="slidebar_alo">
            <ul>
                <li class="re_cuso"><a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq2']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">客服服务</a></li>
                <li class="re_wechat">
                    <a target="_blank" href="" >微信关注</a>
                    <div class="rtipscont" style="">
                        <span class="arrowr-bg"></span>
                        <span class="arrowr"></span>
                        <img src="__STATIC__/images/qrcode.png" />
                        <p class="tiptext">扫码关注官方微信<br>先人一步知晓促销活动</p>
                    </div>
                </li>
                <li class="re_phone">
                    <a target="_blank" href="<?php echo U('Mobile/Index/index'); ?>" >手机商城</a>
                    <div class="rtipscont rstoretips" style="">
                        <span class="arrowr-bg"></span>
                        <span class="arrowr"></span>
                        <img src="__STATIC__/images/qrcode.png" />
                        <p class="tiptext">扫码关注官方微信<br>先人一步知晓促销活动</p>
                    </div>
                </li>
                <li class="re_top"><a target="_blank" href="javascript:void(0);" >回到顶部</a></li>
            </ul>
        </div>
    </div>
    <!--侧边栏-e-->
    <!--footer-e-->
    <script src="__STATIC__/js/common.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/carousel.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/transition.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/js/headerfooter_alone.js" type="text/javascript" charset="utf-8"></script>
    <!--------收货地址，物流运费-开始-------------->
    <script src="__STATIC__/js/location.js"></script>
    <!--------收货地址，物流运费--结束-------------->
    <script type="text/javascript">
        $(function() {
            //首页商品分类显示
            $('.categorys2 .dd').show();

                var uname= getCookie('uname');
                if(uname == ''){
                    $('.islogin').hide();
                    $('.nologin').show();
                }else{
                    $('.nologin').hide();
                    $('.islogin').show();
                    //获取用户名
                    $('.userinfo').html(decodeURIComponent(uname));
                }
        })
        $(function() { //轮播自动播放
            $(".carousel").carousel({interval: 2000});
        });
        $(function() { //floor分类鼠标滑动
            $(".f_tab li").each(function() {
                $(this).hoverDelay({
                    hoverEvent: function() {
                        $(this).addClass('ft');
                        $(this).siblings().removeClass('ft');
                    },
//			    		outEvent: function(){
//			        		$(this).siblings().removeClass('ft'); 
//			    		}
                });
            })
        });
        /**
         * 鼠标移动端到头部购物车上面 就ajax 加载
         */
        // 鼠标是否移动到了上方
        var header_cart_list_over = 0;
        $("#hd-my-cart > .c-n").hover(function(){
            if(header_cart_list_over == 1)
                return false;
            header_cart_list_over = 1;
            $.ajax({
                type : "GET",
                url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
                success: function(data){
                    $("#show_minicart").html(data);
                }
            });
        }).mouseout(function(){

            (typeof(t) == "undefined") || clearTimeout(t);
            t = setTimeout(function () {
                header_cart_list_over = 0; /// 标识鼠标已经离开
            }, 1000);
        });
    //楼层按钮
        //楼层添加data-mid
    $(function(){
        var Dum = {};
        Dum.brand = {
            i:0,
            ri:function(e){
                $(e).each(function(){
                    $(this).attr('id','brand_' + Dum.brand.i);
                    Dum.brand.i++
                })
                Dum.brand.i = 0;
                return Dum.brand.i;
            },
        }
        Dum.brand.ri(".layer-floor");
    })
    //侧边导航
    $(function(){
        $(window).scroll(function(){
            var main_brand = $('.adv3').offset().top;
            var scr = $(document).scrollTop();
            if(scr >= main_brand){
                $('.floornav_left').addClass('showfloornav');
            }else{
                $('.floornav_left').removeClass('showfloornav');
            }
        })

        var _index=0;
        var scr = $(document).scrollTop();
        $(".floornav_left ul li").click(function(){
            _index=$(this).index();
            //通过拼接字符串获取元素，再取得相对于文档的高度
            var _top=$("#brand_"+_index).offset().top + 1;//Firefox有1px的误差
            //scrollTop滚动到对应高度
            $("body,html").animate({scrollTop:_top},500);
        });
        $(window).scroll(function(){
            var tj = [];
            var strlength = $('.layer-floor').length;
            var stheigh = $('.layer-floor').eq(strlength - 1).height();//最后一个楼层的高度
            var scr = $(document).scrollTop();
            $('.layer-floor').each(function(i){
                var sthei = $(this).offset().top;
                tj.push(sthei);//楼层距离顶部的高度添加进数组
            })
            for(var n = 0;n < strlength;n++){
                if(scr >= tj[n] && scr <= tj[n] + stheigh){
                    $(".floornav_left ul li").eq(n).addClass("darkshow").siblings().removeClass("darkshow");
                }
            }
        });
    })
    </script>
</body>
</html>