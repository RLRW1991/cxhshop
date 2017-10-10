<?php
//000000000000s:67580:" <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页-车享惠—商城</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/alone_index.css"/>
    <script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/public/js/global.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/public/static/images/favicon.ico" media="screen"/>
    <!-- 新浪获取ip地址 -start-->
            <script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=192.168.1.113"></script>
        <script type="text/JavaScript">
            doCookieArea(remote_ip_info);
        </script>
    </head>
<body class="gray_f5">
    <!--header-s-->
    <div class="tpshop-tm-hander tp_h_alone p">
        <!--导航栏-s-->
        <div class="top-hander p">
            <div class="w1224 pr p">
                <div class="fl">
                    <!-- 收货地址，物流运费 -start-->
                    <link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
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
                            <a href="/Home/user/login.html">Hi.你好,请登录！</a>
                            <!--<a href="/Home/user/reg.html">免费注册</a>-->
                        </div>
                        <div class="fl islogin" style="color: #ccc;">
                            [<a class="userinfo" href="/Home/user/index.html" style="color: #ccc;"></a>]
                            <span style="color: #666;">|</span>
                            <a  href="/Home/user/logout.html"  title="退出" target="_self" style="color: #aaa;">[安全退出]</a>
                        </div>
                </div>
                <div class="top-ri-header fr">
                    <ul>
                        <li><a target="_blank" href="http://www.newcxh.com/index.php/Login/index.html">会员中心</a></li>
                    <li class="spacer"></li>
                    <li><a target="_blank" href="/Home/user/index.html">商城中心</a></li>
                    <li class="spacer"></li>
                        <!--<li><a target="_blank" href="/Home/User/visit_log.html">我的浏览</a></li>
                        <li class="spacer"></li>
                        <li><a target="_blank" href="/Home/User/coupon.html">我的优惠券</a></li>
                        <li class="spacer"></li>-->
                        <li><a target="_blank" href="/Home/User/goods_collect.html">我的收藏</a></li>
                        <!--<li class="spacer"></li>
                        <li><a target="_blank" title="点击这里给我发消息" href="/Home/Article/detail/article_id/22.html" target="_blank">在线客服</a></li>
                        <li class="spacer"></li>
                        <li class="hover-ba-navdh">
                            <div class="nav-dh">
                                <span>网站导航</span>
                                <i class="share-a_a1"></i>
                                <div class="conta-hv-nav">
                                    <ul>
                                        <li>
                                            <a href="/Home/Activity/group_list.html">团购</a>
                                        </li>
                                        <li>
                                            <a href="/Home/Activity/flash_sale_list.html">抢购</a>
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
                    <a href="/home/Index/index.html" class="logo"> <img src="/public/upload/logo/2017/09-05/54632cb4423239458f6ba9e04f60ff31.png"></a>
                </div>
                <!--搜索-s-->
                <div class="ecsc-search">
                    <form id="searchForm" name="" method="get" action="/Home/Goods/search.html" class="ecsc-search-form">
                        <input autocomplete="off" name="q" id="q" type="text" value="" placeholder="搜索关键字" class="ecsc-search-input">
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
                                        url:"/Home/Api/searchKey.html",
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
                                                            <li>
                                    <a href="/Home/Goods/search/q/%E9%87%8E%E9%A9%AC.html" target="_blank">野马</a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/search/q/%E6%B1%9F%E6%B7%AE.html" target="_blank">江淮</a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/search/q/%E4%BC%97%E6%B3%B0.html" target="_blank">众泰</a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/search/q/%E5%8C%97%E6%B1%BD.html" target="_blank">北汽</a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/search/q/%E5%85%85%E7%94%B5%E6%A1%A9.html" target="_blank">充电桩</a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/search/q/%E6%AF%94%E4%BA%9A%E8%BF%AA.html" target="_blank">比亚迪</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <!--搜索-e-->
                <!--购物车-s-->
                
                <div class="shopingcar-index fr">
                    <div class="u-g-cart fr fixed" id="hd-my-cart">
                        <a href="/Home/Cart/cart.html">
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
                        <a href="/Home/Goods/all_category.html" target="_blank"><i class="share-a_a2"></i>全部商品分类</a>
                    </div>
                    <!--全部商品分类-s-->
                    <div class="dd dd01">
                        <div class="cata-nav">
                            <!-- 外层循环点-->
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-1"></span></div>
                                            <a href="/Home/Goods/goodsList/id/1.html" title="新能源汽车">新能源汽车</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                            <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/Home/Goods/goodsList/id/4.html" target="_blank">野马<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                            </dd>
                                                </dl>
                                                                                                <dl><!-- 2级循环点-->
                                                    <dt>
                                                        <a href="/Home/Goods/goodsList/id/5.html" target="_blank">江淮<i>&gt;</i></a>
                                                    </dt>
                                                    <dd>
                                                                                                            </dd>
                                                </dl>
                                                                                            <!--商品分类底部广告-s-->
                                            <!--<div class="advertisement_down">-->
                                                <!--<ul>                                                -->
                                                    <!--                                                -->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="" >
                                                <img src="" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-2"></span></div>
                                            <a href="/Home/Goods/goodsList/id/2.html" title="会员商品">会员商品</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                        <!--商品分类底部广告-s-->
                                            <!--<div class="advertisement_down">-->
                                                <!--<ul>                                                -->
                                                    <!--                                                -->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="" >
                                                <img src="" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-3"></span></div>
                                            <a href="/Home/Goods/goodsList/id/3.html" title="车生活">车生活</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                        <!--商品分类底部广告-s-->
                                            <!--<div class="advertisement_down">-->
                                                <!--<ul>                                                -->
                                                    <!--                                                -->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="" >
                                                <img src="" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                        <div class="item fore1">
                                                                <div class="item-left">
                                    <div class="cata-nav-name">
                                        <h3>
                                            <div class="contiw-cer"><span class="share-icon-6"></span></div>
                                            <a href="/Home/Goods/goodsList/id/6.html" title="充电桩">充电桩</a>
                                        </h3>
                                    </div>
                                    <b>&gt;</b>
                                </div>
                                                                <div class="cata-nav-layer">
                                    <div class="cata-nav-left">
                                        <div class="subitems">
                                                                                        <!--商品分类底部广告-s-->
                                            <!--<div class="advertisement_down">-->
                                                <!--<ul>                                                -->
                                                    <!--                                                -->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <!--商品分类底部广告-e-->
                                        </div>
                                    </div>
                                    <!--商品分类右侧广告-s-->
                                    <div class="cata-nav-rigth">
                                                                                    <a href="" >
                                                <img src="" title="" style=""/>
                                            </a>
                                                                            </div>
                                    <!--商品分类右侧广告-e-->
                                </div>
                            </div>
                                                    </div>
                    </div>
                    <!--全部商品分类-e-->
                </div>
                
                <!--导航栏-s-->
                <div class="navitems" id="nav">
                    <ul>
                        <li class="index_modify">
                            <a href="/home/Index/index.html" class="selected">首页</a>
                        </li>
                                                    <li class="page"><a href="/index.php/Home/Goods/goodsList/id/1" target="_blank" <span>新能源汽车</span></a></li>
                                                    <li class="page"><a href="/index.php/Home/Goods/goodsList/id/2" target="_blank" <span>会员商品</span></a></li>
                                                    <li class="page"><a href="/index.php/Home/Goods/goodsList/id/3" target="_blank" <span>车生活</span></a></li>
                                                    <li class="page"><a href="/index.php/Home/Goods/goodsList/id/4" target="_blank" <span>充电桩</span></a></li>
                                                    <li class="page"><a href="/index.php/Home/Goods/goodsList/id/5" target="_blank" <span>会员展示</span></a></li>
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
        	                <div class="item active" style="background:;">
                    <a href=""  >
                        <img width="100%;" height="500px;" src="/public/upload/ad/2017/09-25/3682d9bdc4071c7b6be01aaf2e9f8487.png" title="" style="">
                    </a>
                </div>
                            <div class="item " style="background:;">
                    <a href=""  >
                        <img width="100%;" height="500px;" src="/public/upload/ad/2017/09-25/95dcbc257b78a93ec52c515898205734.jpg" title="" style="">
                    </a>
                </div>
                            <div class="item " style="background:;">
                    <a href=""  >
                        <img width="100%;" height="500px;" src="/public/upload/ad/2017/09-25/4620c7f9ea921e1502932ba5a013c512.png" title="" style="">
                    </a>
                </div>
                    </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        <!--轮播图右侧广告-s-->
        <!--<div class="adcertiserment_head">-->
            <!--<div class="w1224">-->
                <!--<ul>-->
                    <!--&lt;!&ndash;&ndash;&gt;-->
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
                <a href="/Home/Article/detail.html"  target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <a href="/Home/Article/detail.html" style="margin-left: 50px;" target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <i></i>
                <a href="/Home/Article/detail.html"  target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <a href="/Home/Article/detail.html" style="margin-left: 50px;" target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>
            <li>
                <i></i>
                <a href="/Home/Article/detail.html"  target="_blank">公告：车享惠新注册会员通知！</a>
                <span>2017-07-06</span>
            </li>   
            <li>
                <a href="/Home/Article/detail.html" style="margin-left: 50px;" target="_blank">公告：车享惠新注册会员通知！</a>
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
        	        		<a href="/Home/Article/detail.html" target="_blank">
	                <!--<i class="glyphicon glyphicon-link" style="color: #fff;"></i>-->
	                <span style=" line-height: 80px;">服务支持</span>
	            </a>
                <!--<div class="hc-column-box">
                    <h2><a href="" target="_self">服务支持</a></h2>
                    <ul>
                                            </ul>
                </div>-->
                    		<a href="/Home/Article/detail.html" target="_blank">
	                <!--<i class="glyphicon glyphicon-link" style="color: #fff;"></i>-->
	                <span style=" line-height: 80px;">新闻中心</span>
	            </a>
                <!--<div class="hc-column-box">
                    <h2><a href="" target="_self">新闻中心</a></h2>
                    <ul>
                                                    <li><a href="/Home/Article/detail/article_id/1.html">最新公告</a></li>
                                            </ul>
                </div>-->
                    		<a href="/Home/Article/detail/article_id/1.html" target="_blank">
	                <!--<i class="glyphicon glyphicon-link" style="color: #fff;"></i>-->
	                <span style=" line-height: 80px;">关于我们</span>
	            </a>
                <!--<div class="hc-column-box">
                    <h2><a href="" target="_self">关于我们</a></h2>
                    <ul>
                                            </ul>
                </div>-->
                    		<a href="/Home/Article/detail/article_id/1.html" target="_blank">
	                <!--<i class="glyphicon glyphicon-link" style="color: #fff;"></i>-->
	                <span style=" line-height: 80px;">关注我们</span>
	            </a>
                <!--<div class="hc-column-box">
                    <h2><a href="" target="_self">关注我们</a></h2>
                    <ul>
                                            </ul>
                </div>-->
                        <!--<a href="" target="_blank">
                <img src="/template/pc/rainbow/static/images/zxhd-ico1.png" alt="">
                <span>关注我们</span>
            </a>
            <a href="" target="_blank">
                <img src="/template/pc/rainbow/static/images/zxhd-ico1.png" alt="">
                <span>购物指南</span>
            </a>
            <a href="" target="_blank">
                <img src="/template/pc/rainbow/static/images/zxhd-ico1.png" alt="">
                <span>社区活动</span>
            </a>
            <a href="" target="_blank">
                <img src="/template/pc/rainbow/static/images/zxhd-ico1.png" alt="">
                <span>电子发票</span>
            </a>-->
        </div>
        <div class="adv3_fr">
            <ul>
                                    <li>
                        <a href="" target="_blank">
                            <img src="/public/upload/ad/2017/09-05/a95531ccac306d825532b848dd4673a5.png" title="" style=""/>
                        </a>
                    </li>
                                    <li>
                        <a href="" target="_blank">
                            <img src="/public/upload/ad/2017/09-05/f4dd9bc950e215d6952d314b9583c023.png" title="" style=""/>
                        </a>
                    </li>
                                    <li>
                        <a href="" target="_blank">
                            <img src="/public/upload/ad/2017/09-05/c054eee6d85330c7747f4f12b3fc0b5f.png" title="" style=""/>
                        </a>
                    </li>
                            </ul>
        </div>
    </div>
    <!--轮播图底部广告-e-->
    <div class="adver_line">
        <div class="w1224">
                            <a href="" >
                <img src="/public/upload/ad/2017/09-25/035d92c48b176e3aeb987eac9b2d33fc.jpg" width="1200" height="160"  title="" style=""/>
                </a>
                    </div>
    </div>

<!--------楼层-开始-------------->
        <!--商品楼层-s-->
        <div class="layer-floor " id="floor1">
            <div class="w1224">
            <div class="top_title_layer p">
                <div class="top_title_layer_fl">
                    <em></em>
                    <div class="part-title">新能源汽车</div>
                    <span> / New Energy</span>
                     <a href="/Home/Goods/goodsList.html">查看更多></a>
                </div>
                <div class="part-hot">
                    <ul>
                                                    <li>
                                <a href="/Home/Goods/goodsList/id/4.html">野马</a>
                            </li>
                                                    <li>
                                <a href="/Home/Goods/goodsList/id/5.html">江淮</a>
                            </li>
                                            </ul>
                </div>
            </div>
            <div class="main_layer p">
                <div class="hoste_le">  
					                        <a class="big_adve" href="" >
                        <img src="/public/upload/ad/2017/09-25/b4b0eaf97755c6463e96ec5aff8fe195.jpg" width="240" height="820"  title="" style=""/>
                        </a>
                                        
                </div>
                <div class="hoste_ri">
                    <ul>
                                                        <li>
                                    <a href="/Home/Goods/goodsInfo/id/1.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/1/goods_thumb_1_223_223.png"/>
                                        <span class="name_main">野马-VELITE</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">野马</span>-->
                                        <span class="price_main"><i>￥</i>265800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/2.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/2/goods_thumb_2_223_223.png"/>
                                        <span class="name_main">野马TV5426</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">野马</span>-->
                                        <span class="price_main"><i>￥</i>150000.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/3.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/3/goods_thumb_3_223_223.png"/>
                                        <span class="name_main">江淮IEV7</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">新能源汽车</span>-->
                                        <span class="price_main"><i>￥</i>119800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/4.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/4/goods_thumb_4_223_223.png"/>
                                        <span class="name_main">众泰E200</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">新能源汽车</span>-->
                                        <span class="price_main"><i>￥</i>263000.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/5.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/5/goods_thumb_5_223_223.png"/>
                                        <span class="name_main">江淮IE6S</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">新能源汽车</span>-->
                                        <span class="price_main"><i>￥</i>315662.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/6.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/6/goods_thumb_6_223_223.png"/>
                                        <span class="name_main">北汽EV150</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">新能源汽车</span>-->
                                        <span class="price_main"><i>￥</i>166363.00</span>
                                    </a>
                                </li>
                                                </ul>
                </div>
            </div>
        </div>
        </div>
    <!--商品楼层-e-->
        <!--商品楼层-s-->
        <div class="layer-floor " id="floor2">
            <div class="w1224">
            <div class="top_title_layer p">
                <div class="top_title_layer_fl">
                    <em></em>
                    <div class="part-title">会员商品</div>
                    <span> / New Energy</span>
                     <a href="/Home/Goods/goodsList.html">查看更多></a>
                </div>
                <div class="part-hot">
                    <ul>
                                            </ul>
                </div>
            </div>
            <div class="main_layer p">
                <div class="hoste_le">  
					                        <a class="big_adve" href="" >
                        <img src="/public/upload/ad/2017/09-25/d7661d2098830db36104486b4bcd9036.jpg" width="240" height="820"  title="" style=""/>
                        </a>
                                        
                </div>
                <div class="hoste_ri">
                    <ul>
                                                        <li>
                                    <a href="/Home/Goods/goodsInfo/id/7.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/7/goods_thumb_7_223_223.png"/>
                                        <span class="name_main">波尔多AOP</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">会员商品</span>-->
                                        <span class="price_main"><i>￥</i>132.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/8.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/8/goods_thumb_8_223_223.png"/>
                                        <span class="name_main">波尔多AOP1</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">会员商品</span>-->
                                        <span class="price_main"><i>￥</i>323.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/9.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/9/goods_thumb_9_223_223.png"/>
                                        <span class="name_main">波尔多AOP2</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">会员商品</span>-->
                                        <span class="price_main"><i>￥</i>646.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/10.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/10/goods_thumb_10_223_223.png"/>
                                        <span class="name_main">波尔多AOP3</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">会员商品</span>-->
                                        <span class="price_main"><i>￥</i>549.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/11.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/11/goods_thumb_11_223_223.png"/>
                                        <span class="name_main">波尔多AOP4</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">会员商品</span>-->
                                        <span class="price_main"><i>￥</i>632.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/12.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/12/goods_thumb_12_223_223.png"/>
                                        <span class="name_main">波尔多AOP5</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">会员商品</span>-->
                                        <span class="price_main"><i>￥</i>646.00</span>
                                    </a>
                                </li>
                                                </ul>
                </div>
            </div>
        </div>
        </div>
    <!--商品楼层-e-->
        <!--商品楼层-s-->
        <div class="layer-floor " id="floor3">
            <div class="w1224">
            <div class="top_title_layer p">
                <div class="top_title_layer_fl">
                    <em></em>
                    <div class="part-title">车生活</div>
                    <span> / New Energy</span>
                     <a href="/Home/Goods/goodsList.html">查看更多></a>
                </div>
                <div class="part-hot">
                    <ul>
                                            </ul>
                </div>
            </div>
            <div class="main_layer p">
                <div class="hoste_le">  
					                        <a class="big_adve" href="" >
                        <img src="/public/upload/ad/2017/09-25/3f93b03429ebe11388ca87e2bf3e0be9.jpg" width="240" height="820"  title="" style=""/>
                        </a>
                                        
                </div>
                <div class="hoste_ri">
                    <ul>
                                                        <li>
                                    <a href="/Home/Goods/goodsInfo/id/14.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/14/goods_thumb_14_223_223.jpeg"/>
                                        <span class="name_main">车生活02</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">车生活</span>-->
                                        <span class="price_main"><i>￥</i>1980.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/15.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/15/goods_thumb_15_223_223.jpeg"/>
                                        <span class="name_main">车生活03</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">车生活</span>-->
                                        <span class="price_main"><i>￥</i>1980.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/16.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/16/goods_thumb_16_223_223.jpeg"/>
                                        <span class="name_main">车生活04</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">车生活</span>-->
                                        <span class="price_main"><i>￥</i>1980.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/17.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/17/goods_thumb_17_223_223.jpeg"/>
                                        <span class="name_main">车生活05</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">车生活</span>-->
                                        <span class="price_main"><i>￥</i>1980.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/18.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/18/goods_thumb_18_223_223.jpeg"/>
                                        <span class="name_main">车生活06</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">车生活</span>-->
                                        <span class="price_main"><i>￥</i>1980.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/13.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/13/goods_thumb_13_223_223.jpeg"/>
                                        <span class="name_main">车生活01</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">车生活</span>-->
                                        <span class="price_main"><i>￥</i>1980.00</span>
                                    </a>
                                </li>
                                                </ul>
                </div>
            </div>
        </div>
        </div>
    <!--商品楼层-e-->
        <!--商品楼层-s-->
        <div class="layer-floor " id="floor4">
            <div class="w1224">
            <div class="top_title_layer p">
                <div class="top_title_layer_fl">
                    <em></em>
                    <div class="part-title">充电桩</div>
                    <span> / New Energy</span>
                     <a href="/Home/Goods/goodsList.html">查看更多></a>
                </div>
                <div class="part-hot">
                    <ul>
                                            </ul>
                </div>
            </div>
            <div class="main_layer p">
                <div class="hoste_le">  
					                        <a class="big_adve" href="" >
                        <img src="/public/upload/ad/2017/09-05/021aca83cdbf9d570d4100f364dd29dc.png" width="240" height="820"  title="" style=""/>
                        </a>
                                        
                </div>
                <div class="hoste_ri">
                    <ul>
                                                        <li>
                                    <a href="/Home/Goods/goodsInfo/id/19.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/19/goods_thumb_19_223_223.png"/>
                                        <span class="name_main">充电桩01</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">充电桩</span>-->
                                        <span class="price_main"><i>￥</i>19800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/20.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/20/goods_thumb_20_223_223.png"/>
                                        <span class="name_main">充电桩02</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">充电桩</span>-->
                                        <span class="price_main"><i>￥</i>19800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/21.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/21/goods_thumb_21_223_223.png"/>
                                        <span class="name_main">充电桩03</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">充电桩</span>-->
                                        <span class="price_main"><i>￥</i>19800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/22.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/22/goods_thumb_22_223_223.png"/>
                                        <span class="name_main">充电桩04</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">充电桩</span>-->
                                        <span class="price_main"><i>￥</i>19800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/23.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/23/goods_thumb_23_223_223.png"/>
                                        <span class="name_main">充电桩05</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">充电桩</span>-->
                                        <span class="price_main"><i>￥</i>19800.00</span>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="/Home/Goods/goodsInfo/id/24.html">
                                        <img class="picture_main" src="/public/upload/goods/thumb/24/goods_thumb_24_223_223.png"/>
                                        <span class="name_main">充电桩06</span>
                                        <span class="menu_main"></span>
                                        <!--<span class="intro_main">充电桩</span>-->
                                        <span class="price_main"><i>￥</i>19800.00</span>
                                    </a>
                                </li>
                                                </ul>
                </div>
            </div>
        </div>
        </div>
    <!--商品楼层-e-->
        <!--楼层导航-s-->
    <div class="floornav_left">
        <ul>
                            <li class="elevators">
                    <a >1F<span class="cofin_floor">新能源汽车</span></a>
                </li>
                            <li class="elevators">
                    <a >2F<span class="cofin_floor">会员商品</span></a>
                </li>
                            <li class="elevators">
                    <a >3F<span class="cofin_floor">车生活</span></a>
                </li>
                            <li class="elevators">
                    <a >4F<span class="cofin_floor">充电桩</span></a>
                </li>
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
                    <!---->
                        <!--<dl class="foot-con">-->
                            <!--<dt>服务支持</dt>-->
                            <!---->
                        <!--</dl>-->
                    <!---->
                        <!--<dl class="foot-con">-->
                            <!--<dt>新闻中心</dt>-->
                            <!---->
                            <!--<dd>-->
                                <!--<a target="_blank" href="/Home/Article/detail/article_id/1.html">最新公告</a>-->
                            <!--</dd>-->
                            <!---->
                        <!--</dl>-->
                    <!---->
                        <!--<dl class="foot-con">-->
                            <!--<dt>关于我们</dt>-->
                            <!---->
                        <!--</dl>-->
                    <!---->
                        <!--<dl class="foot-con">-->
                            <!--<dt>关注我们</dt>-->
                            <!---->
                        <!--</dl>-->
                    <!---->
                    <!--<dl class="foot-con continue">-->
                        <!--<dt>联系我们</dt>-->
                        <!--<dd>-->
                            <!--<span class="cellphone_con">123456789</span>-->
                            <!--<span class="time_con">周一至周日8:00-18:00</span>-->
                            <!--<span class="cost_con">（仅收市话费）</span>-->
                            <!--<a class="software_con" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">-->
                                <!--<img src="/template/pc/rainbow/static/images/continue.png"/>-->
                            <!--</a>-->
                        <!--</dd>-->
                    <!--</dl>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="foot-bottom">-->
            <!--<p>Copyright © 2016-2025 车享惠——商城 版权所有 保留一切权利 备案号:粤12345678号</p>-->
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
                <img src="/template/pc/rainbow/static/images/bottom_tel_03.png" class="bottom_center_info_pic"/>
                <img src="/template/pc/rainbow/static/images/bottom_ewm_03.png" class="bottom_center_info_ewm"/>
                <span class="bottom_center_info_ewm_txt">扫描二维码  关注官方微信<br>车享惠集团</span>
                <span class="bottom_center_info_wid" style="margin-top:280px;"><a href="#">关于车享</a> | <a href="#">网站首页</a> | <a href="#">网站地图</a> | <a href="#">联系我们</a> | <a href="#">积分商城</a> | <a href="#">会员商城</a></span>
                <span class="bottom_center_info_wid">Copyright © 2014 www.cxhnetwork.com  备案号：蜀ICP456455454号-1   联系电话:400-1166-167</span>
                <span class="bottom_center_info_wid">邮箱：scyljcgs@163.com 传真:0816-6147888 地址：体验中心地址：四川绵阳市涪城区龙门镇 邮编：100048</span>
                <div class="bottom_center_bt">
                    <img src="/template/pc/rainbow/static/images/bottom_bt_1_03.png"/>
                    <img src="/template/pc/rainbow/static/images/bottom_bt_2_03.png"/>
                    <img src="/template/pc/rainbow/static/images/bottom_bt_3_03.png"/>
                    <img src="/template/pc/rainbow/static/images/bottom_bt_4_03.png"/>
                    <img src="/template/pc/rainbow/static/images/bottom_bt_5_03.png"/>
                </div>
            </div>
        </div>
    </div>
    <!--侧边栏-s-->
    <div class="tp_h_alone">
        <div class="slidebar_alo">
            <ul>
                <li class="re_cuso"><a title="点击这里给我发消息" href="tencent://message/?uin=123456789&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">客服服务</a></li>
                <li class="re_wechat">
                    <a target="_blank" href="" >微信关注</a>
                    <div class="rtipscont" style="">
                        <span class="arrowr-bg"></span>
                        <span class="arrowr"></span>
                        <img src="/template/pc/rainbow/static/images/qrcode.png" />
                        <p class="tiptext">扫码关注官方微信<br>先人一步知晓促销活动</p>
                    </div>
                </li>
                <li class="re_phone">
                    <a target="_blank" href="/Mobile/Index/index.html" >手机商城</a>
                    <div class="rtipscont rstoretips" style="">
                        <span class="arrowr-bg"></span>
                        <span class="arrowr"></span>
                        <img src="/template/pc/rainbow/static/images/qrcode.png" />
                        <p class="tiptext">扫码关注官方微信<br>先人一步知晓促销活动</p>
                    </div>
                </li>
                <li class="re_top"><a target="_blank" href="javascript:void(0);" >回到顶部</a></li>
            </ul>
        </div>
    </div>
    <!--侧边栏-e-->
    <!--footer-e-->
    <script src="/template/pc/rainbow/static/js/common.js" type="text/javascript" charset="utf-8"></script>
    <script src="/template/pc/rainbow/static/js/carousel.js" type="text/javascript" charset="utf-8"></script>
    <script src="/template/pc/rainbow/static/js/transition.js" type="text/javascript" charset="utf-8"></script>
    <script src="/template/pc/rainbow/static/js/headerfooter_alone.js" type="text/javascript" charset="utf-8"></script>
    <!--------收货地址，物流运费-开始-------------->
    <script src="/template/pc/rainbow/static/js/location.js"></script>
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
";
?>