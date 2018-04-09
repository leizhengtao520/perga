<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=11;IE=9;IE=8;IE=7" />
<title>佩伽-幕墙设计领导品牌</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="phpweb! V2.1.1" />
<meta name="author" content="Weboss.hk" />
<meta name="copyright" content="2001-2016 Tonv Inc." />
<link rel="shortcut icon" href="base/pics/favorite.ico" />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/blockui.js"></script>
<script type="text/javascript" src="js/jquery.superslide.js"></script>
<script type="text/javascript" src="js/jquery.w.js"></script>
<script type="text/javascript" src="js/velocity.min.js"></script>
<!-reload-!>
</head>
<body style='background:transparent'>

<script>
var PDV_PAGEID='1'; 
var PDV_RP=''; 
var PDV_COLTYPE='index'; 
var PDV_PAGENAME='index'; 
</script>
<div id='page' style='margin:auto;clear:both;overflow:hidden;position:relative;width:100%;'>
<div id='contain' style=' background:transparent;margin:0px auto;padding:0px'>

<div id='top' style=' height:932px;background:transparent'>

<div id='pdv_17302' class='pdv_class'  title='' style='width:100%; height:930px;top:0px;left:0px;  z-index:-1'>
<div id='spdv_17302' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<script src="js/html5zoo.js" type="text/javascript"></script>
<script src="js/lovelygallery.js" type="text/javascript"></script>
<script>
$(function(){
	lovelygalleryInit({
		id:"#pdv_17302 .con"
		, S: '1'
		, width:1920, height:930
		, showbottomshadow: '1' != '0'
		, arrowstyle: '1' == 0 ? "none" : "mouseover"
	});
	var i = html5zooId-1;
	$(".html5zoo-arrow-left-"+i+", .html5zoo-arrow-right-"+i).css("opacity", 0.5).hover(function(){
		$(this).css("opacity", 0.8)
	}, function(){$(this).css("opacity", 0.5)});
	$(".html5zoo-slider-"+i).css("overflow", "hidden");
})
</script>
<div style="height: 930px">
<div class='con' style="margin-left: 50%; left: -960px; position: relative;">
<ul class='html5zoo-slides'>

<li><a target='_blank' href='http://'><img src='picture/1516845538.jpg'></a></li>

<li><a target='_blank' href='http://'><img src='picture/1516845985.jpg'></a></li>

</ul>
<ul class='html5zoo-thumbnails'>

<li><img src=''></li>

<li><img src=''></li>

</ul>
</div>
</div>

</div>

</div>
</div><div style='margin:0 auto;position:relative;width:1200px;'>
<div id='pdv_17297' class='pdv_class'   style='width:843px;height:110px;top:0px;left:357px; z-index:5'>
<div id='spdv_17297' class='pdv_top' style='overflow:visible;width:100%;'>
<div class="pdv_border">

<script>
function getTop(){
	return document.documentElement.scrollTop;
}
$(function(){
	$("#pdv_17297 .bg").css("opacity", "0.85");

	if(getCookie("PLUSADMIN")=="SET"){return false}
	
	var ot, div = [], win = $(window);
	var offset = "".replace(/\s/g, "");
	offset = offset.match(/^[+-]?\d*,[+-]?\d*(\|[+-]?\d*,[+-]?\d*)*$/) ? offset.split("|") : [];
	function f(id){
		var top = $(id);
		if(!top.size()) return;
		top.wrap("<div>");
		top.height("auto");
		var o = top, w, t;
		while(o = o.parent(), o.size()) {
			if(o.width()) {
				w = o.width();
				if(o.css("display") == 'none') {
					o.show();
					t = o.offset().top;
					o.hide();
				}else
					t = o.offset().top;
				break;
			}
		}
		top.width(w);
		if(offset[div.length-1]) {
			var x = offset[div.length-1].split(",")[0] || 0;
			var y = offset[div.length-1].split(",")[1] || 0;
			top.css("left", ot.left+(+x));
			top.css("top", +y);
		}else
			top.css("top", t - ot.top);
		div.push(top);
	}
	var t = '3';
	if(t == 1){
		var top = $("#top");
		top.parent().css("paddingTop", top.height());
		top.addClass("fixedtop");
	} else {
		var menu = $(".wumainmenu#menumain");
		ot = menu.offset();
		f(menu);
		if(t == 3)
			$.each("网站标志".split(","), function(i, v){
				f( $($("#pdv_"+v).size() ? "#pdv_"+v : ".pdv_class[title="+v+"]").children() );
			});

		win.on("scroll resise", function(){
			var t = menu.parent().offset().top;
			$.each(div, function(i,o){ 
				var b = win.scrollTop() >= t;
				if(b) {
					o.parent().height(o.parent().height());
				}else {
					o.parent().height("auto");
				}
				o.toggleClass("fixedtop", b);
			})
		})
	}
})
</script>

<link href="css/wumainmenu.css" rel="stylesheet" type="text/css" />
<style>
#pdv_17297 .wumainmenu{padding-bottom: 0;}
#pdv_17297 .bg{_height: 110px; background: #ffffff; opacity: 0.85;}
#pdv_17297 .line{background: #ff0000; height: 0;}
#pdv_17297 .bd{height: 110px; padding-left: 0; padding-right: 0;}
#pdv_17297 ul{height: 110px;}
#pdv_17297 dt{height: 110px;}
#pdv_17297 li{margin-right: 0; width: 120px; }

#pdv_17297 dt a{line-height:110px; background-color: transparent; background-image: url();
color: #000000; font-size:16px; font-weight:normal; border-right-color: transparent;}
#pdv_17297 .cur dt a,
#pdv_17297 dt a:hover{color: #ffffff; background-color: #febe30; background-image: url();}
#pdv_17297 dt a span{line-height:20px; width: 120px; 
color: #b9cedf; font-size:12px; }
#pdv_17297 .cur dt a span,
#pdv_17297 dt a:hover span{color: #ffffff;}
#pdv_17297 dd {padding: 0 0;  width: 120px; 
background: #005bac;}
#pdv_17297 dd a{line-height:28px; background: transparent; background-image: url();
color: #ffffff; font-size:12px; font-weight:normal;}
#pdv_17297 dd a:hover{color: #ffffff; background: #ff7e00; background-image: url();}

</style>
<div id="menumain" class="wumainmenu wumainmenu-s1">
<div class="bg"></div>
<div class="line"></div>
<div class="bd">
<ul>

<li class="n1">
<dl><dt>
<a href="index.php" ><span></span>网站首页</a>
</dt><dd></dd></dl>
</li>

<li class="n2">
<dl><dt>
<a href="company.php" ><span></span>公司简介</a>
</dt><dd></dd></dl>
</li>

<li class="n3">
<dl><dt>
<a href="new.html" ><span></span>新闻动态</a>
</dt><dd></dd></dl>
</li>

<li class="n4">
<dl><dt>
<a href="product.html" ><span></span>产品系列</a>
</dt><dd></dd></dl>
</li>

<li class="n5">
<dl><dt>
<a href="notice.php" ><span></span>品牌加盟</a>
</dt><dd></dd></dl>
</li>

<li class="n6">
<dl><dt>
<a href="service.php" ><span></span>客户服务</a>
</dt><dd></dd></dl>
</li>

<li class="n7">
<dl><dt>
<a href="index-job.php" ><span></span>人才招聘</a>
</dt><dd></dd></dl>
</li>

</ul>
</div>
</div>
<script>
$(function(){
	$("#pdv_17297 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_17297 .n"+parseInt('0')).addClass("cur");
	$("#pdv_17297 dd").css("opacity", '0.9');
	if('0' != 1) return;
	$("#pdv_17297 dd").each(function(){
		if(this.innerHTML == '') $(this).remove();
	});
	
	if(getCookie("PLUSADMIN")=="SET"){return false}
	
	var plus = {};
	var tm;
	var cur;
	for(var i in plus) {
		plus[i] = $("#pdv_"+plus[i]).size() ? $("#pdv_"+plus[i]) : $(".pdv_class[title="+plus[i]+"]");
		plus[i].hide().hover(function(){
			clearTimeout(tm);
			cur = this;
		}, hide);
		plus[i].children().removeClass("pdv_top");
	}
	function hide(){
		tm = setTimeout(function(){
			$(cur).hide();
		}, 500);
	}
	$("#pdv_17297 li").hover(function(){
		clearTimeout(tm);
		$(cur).hide();
		var i = $(this).index()+1;
		if(plus[i]) {
			cur = plus[i].show();
			return;
		}
		$("dd", this).show();
	}, function(){
		hide();
		$("dd", this).hide();
	});
})
</script>

</div>

</div>
</div>
</div><div style='margin:0 auto;position:relative;width:1200px;'>
<div id='pdv_17301' class='pdv_class'  title='网站标志' style='width:241px;height:49px;top:31px;left:0px; z-index:6'>
<div id='spdv_17301' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">


<a href="#"><img src="picture/1516845083.png" border="0" /></a>


</div>

</div>
</div>
</div>
</div>
<div id='content' style='width:1200px;height:2763px;background:transparent;margin:0px auto'>

<div id='pdv_17272' class='pdv_class'  title='全屏通栏广告背景' style='width:1200px;height:616px;top:437px;left:0px; z-index:2'>
<div id='spdv_17272' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 616px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/1516847225.jpg); background-color:transparent;background-position:center top; background-repeat: no-repeat;opacity:"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17275' class='pdv_class'  title='全屏通栏广告背景top' style='width:1200px;height:732px;top:1612px;left:0px; z-index:3'>
<div id='spdv_17275' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 732px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/1516851548.jpg); background-color:transparent;background-position:center top; background-repeat: no-repeat;opacity:"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17279' class='pdv_class'  title='全屏通栏广告背景top' style='width:1200px;height:443px;top:1821px;left:0px; z-index:4'>
<div id='spdv_17279' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 443px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(); background-color:#ffffff;background-position:center top; background-repeat: no-repeat;opacity:0.35"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17271' class='pdv_class'  title='' style='width:1200px;height:436px;top:0px;left:0px; z-index:7'>
<div id='spdv_17271' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<div class="prod">
<ul class="wrapper cf">

        <li >
                <a href="page/products/95.php" target="_blank" title="高清彩色摄像机">
                    <div class="desc">
                        <h2>高清彩色摄像机</h2>
                        <p>极至高清 真实还原</p>
                    </div>
                    <div class="pic"><img src="picture/1516846155.jpg" alt="高清彩色摄像机" onerror="this.error=null;this.src='Public/home/images/default.jpg'"/></div>
                    <span class="more">查看本系列产品</span>
                </a>
            </li>

        <li >
                <a href="page/products/97.php" target="_blank" title="USB高清彩色摄像机即插即用">
                    <div class="desc">
                        <h2>USB高清彩色摄像机即插即用</h2>
                        <p>完美高清</p>
                    </div>
                    <div class="pic"><img src="picture/1516846229.jpg" alt="USB高清彩色摄像机即插即用" onerror="this.error=null;this.src='Public/home/images/default.jpg'"/></div>
                    <span class="more">查看本系列产品</span>
                </a>
            </li>

        <li >
                <a href="page/products/98.php" target="_blank" title="视讯会议">
                    <div class="desc">
                        <h2>视讯会议</h2>
                        <p>流畅沟通 真实体验</p>
                    </div>
                    <div class="pic"><img src="picture/1516846267.jpg" alt="视讯会议" onerror="this.error=null;this.src='Public/home/images/default.jpg'"/></div>
                    <span class="more">查看本系列产品</span>
                </a>
            </li>

        <li >
                <a href="page/products/99.php" target="_blank" title="周边设备">
                    <div class="desc">
                        <h2>周边设备</h2>
                        <p>完美搭配</p>
                    </div>
                    <div class="pic"><img src="picture/1516846309.jpg" alt="周边设备" onerror="this.error=null;this.src='Public/home/images/default.jpg'"/></div>
                    <span class="more">查看本系列产品</span>
                </a>
            </li>

</ul>
</div>


</div>

</div>
</div>
<div id='pdv_17273' class='pdv_class'  title='' style='width:1200px;height:533px;top:469px;left:0px; z-index:8'>
<div id='spdv_17273' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<div class="solution">
    <div class="wrapper">
        <div class="mtitle"><h3><em>A</em>pplication Area</h3><h2>产品应用领域</h2></div>
        <div class="bd">
            <ul>


                <li  style="width: 299.5px; overflow: hidden;text-align:center;">
                        <div class="pic"><img src="picture/1516847379.png"/></div>
                        <div class="texta">
                            视频会议
                            <a href="page/application/100.php" class="more">详细了解</a>
							</div>
                        <div class="textb">
                            <h2>视频会议</h2>
                            <p></p>
                            <a href="page/application/100.php" class="more">详细了解</a>
                        </div>
                    </li>

                <li  style="width: 299.5px; overflow: hidden;text-align:center;">
                        <div class="pic"><img src="picture/1516847423.png"/></div>
                        <div class="texta">
                            远程医疗
                            <a href="page/application/101.php" class="more">详细了解</a>
							</div>
                        <div class="textb">
                            <h2>远程医疗</h2>
                            <p></p>
                            <a href="page/application/101.php" class="more">详细了解</a>
                        </div>
                    </li>

                <li  style="width: 299.5px; overflow: hidden;text-align:center;">
                        <div class="pic"><img src="picture/1516847451.png"/></div>
                        <div class="texta">
                            远程教育
                            <a href="page/application/102.php" class="more">详细了解</a>
							</div>
                        <div class="textb">
                            <h2>远程教育</h2>
                            <p></p>
                            <a href="page/application/102.php" class="more">详细了解</a>
                        </div>
                    </li>

                <li  style="width: 299.5px; overflow: hidden;text-align:center;">
                        <div class="pic"><img src="picture/1516847475.png"/></div>
                        <div class="texta">
                            智慧党建
                            <a href="page/application/103.php" class="more">详细了解</a>
							</div>
                        <div class="textb">
                            <h2>智慧党建</h2>
                            <p></p>
                            <a href="page/application/103.php" class="more">详细了解</a>
                        </div>
                    </li>

</ul>
</div>
</div>
</div>

</div>

</div>
</div>
<div id='pdv_17274' class='pdv_class'  title='自定模版' style='width:1200px;height:555px;top:1054px;left:0px; z-index:9'>
<div id='spdv_17274' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">
<div class="choose">
    <div class="mtitle"><h3><em>W</em>hy choose us</h3><h2>为什么选择我们？</h2></div>
    <div class="wrapper">
        <div class="bd">
            <ul class="cf">
	<li class="c1">
		<div class="pic">
			<i class="bicon-i1"></i> 
		</div>
		<div class="con">
			<h3>
				自行研发生产
			</h3>
			<p>
				我们拥有自己的研发团队<br />
自有工厂生产
			</p>
		</div>
	</li>
	<li class="c2">
		<div class="pic">
			<i class="bicon-i2"></i> 
		</div>
		<div class="con">
			<h3>
				做工精湛
			</h3>
			<p>
				每一道工序都有着严格的<br />
检测标准
			</p>
		</div>
	</li>
	<li class="c3">
		<div class="pic">
			<i class="bicon-i3"></i> 
		</div>
		<div class="con">
			<h3>
				国际质量认证
			</h3>
			<p>
				我们获得了众多国际质量认证CE, FCC, ROHS, ISO9001
			</p>
		</div>
	</li>
	<li class="c4">
		<div class="pic">
			<i class="bicon-i4"></i> 
		</div>
		<div class="con">
			<h3>
				价格合理公道
			</h3>
			<p>
				国际品质，国内价格
			</p>
		</div>
	</li>
</ul>        </div>
        <div class="fd">
            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=510551&amp;site=qq&amp;menu=yes" target="_blank"><i class="icon-msg"></i> 在线产品咨询</a>
            
        </div>
    </div>
</div>

</div>

</div>
</div>
<div id='pdv_17276' class='pdv_class'  title='广告位' style='width:350px;height:350px;top:1866px;left:0px; z-index:10'>
<div id='spdv_17276' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">




<a href="http://"><img src="picture/1516854244.jpg" border="0" width="100%" /></a>

</div>

</div>
</div>
<div id='pdv_17277' class='pdv_class'  title='广告位' style='width:1200px;height:135px;top:1670px;left:0px; z-index:11'>
<div id='spdv_17277' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:6px;line-height:25px;font-weight:bold;color:">
		广告位
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">
<div class="mtitle"><h3>About Us</h3><h2>了解我们</h2></div>

</div>
</div>

</div>
</div>
<div id='pdv_17278' class='pdv_class'  title='关于我们' style='width:387px;height:358px;top:1867px;left:367px; z-index:12'>
<div id='spdv_17278' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">
<span style="color:#DDDDDD;font-size:16px;line-height:2.5;"><strong>深圳市某某有限公司</strong></span> 
<p>
	<span style="color:#DDDDDD;font-size:14px;line-height:1.5;">成立于2001年，是专业的高清视频会议摄像机制造研发厂家；公司集研发、设计、生产、销售于一体，产品广泛应用于视频会议、远程教育、远程教育、远程医疗、电子政务、应急通信、统一通信、多媒体课堂等领域。</span> 
</p>
<p>
	<span style="color:#DDDDDD;font-size:14px;line-height:1.5;">• 从成立之初，持续专注于高清彩色摄像机的开发和技术研究；依托强大的科研平台优势，获得多项专利证书及软件著作权证书，并在高清摄像机的自动聚焦，自动白平衡，自动光圈，3D降噪处理等专业技术领域，拥有自主核心算法及优势。</span> 
</p>
<p>
	<span style="color:#DDDDDD;font-size:14px;line-height:1.5;">• 始终以“信任源至于沟通”的合作理念，倾听用户需求，不断完善产品功能、效果及品质要求，以优良的性价比，优质的服务体系，赢得全球客户的信任及支持。</span> 
</p>
<p>
	<span style="color:#DDDDDD;font-size:14px;line-height:1.5;">• 秉持开放的合作态度，面向全球客户提供代理、OEM、ODM等合作方式；以客户需求为向导，以客户满意为核心价值，共同推进行业技术发展而努力。</span> 
</p>
</div>

</div>
</div>
<div id='pdv_17280' class='pdv_class'  title='最新文章' style='width:377px;height:372px;top:1867px;left:802px; z-index:13'>
<div id='spdv_17280' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<link href="css/newslist_time.css" rel="stylesheet" type="text/css" />
<div class="hd" style="margin:0px 0px 20px;padding:0px;border:0px;font-size:18px;line-height:30px;color:#DDDDDD;white-space:normal;">
	最新资讯
</div>
<ul class="newslist_time">

<li class="newslist_time"><div class="time">2010-01-25</div><a href="news/html/?381.html" target="_self" class="newslist_time"   >本公司参加第八十届广州商</a></li>

<li class="newslist_time"><div class="time">2010-01-25</div><a href="news/html/?377.html" target="_self" class="newslist_time"   >中科院院士王教授来本公司</a></li>

<li class="newslist_time"><div class="time">2010-01-25</div><a href="news/html/?376.html" target="_self" class="newslist_time"   >本公司通过国家科技部高新</a></li>

<li class="newslist_time"><div class="time">2010-01-06</div><a href="news/html/?366.html" target="_self" class="newslist_time"   >某某公司新版网站全新改版</a></li>

<li class="newslist_time"><div class="time">2009-12-29</div><a href="news/html/?346.html" target="_self" class="newslist_time"   >国际质量管理和质量保证体</a></li>

<li class="newslist_time"><div class="time">2009-12-15</div><a href="news/html/?338.html" target="_self" class="newslist_time"   >管理和质量保证体系国际质</a></li>

</ul>
<script>
$(function(){
	if('0' != 1) return; 
	animate("#spdv_17280", {direction: '上', opacity: '1', distance: '200'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
})
</script>
</div>

</div>
</div>
<div id='pdv_17281' class='pdv_class'  title='' style='width:1px;height:386px;top:1858px;left:781px; z-index:14'>
<div id='spdv_17281' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:1px rgb(255, 255, 255) solid;background:rgb(255, 255, 255);">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:6px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">
&nbsp;
</div>
</div>

</div>
</div>
<div id='pdv_17283' class='pdv_class'  title='广告位' style='width:1200px;height:135px;top:2342px;left:0px; z-index:16'>
<div id='spdv_17283' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:6px;line-height:25px;font-weight:bold;color:">
		广告位
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">
<div class="mtitle"><h3>Product Show</h3><h2>产品展示</h2></div>

</div>
</div>

</div>
</div>
<div id='pdv_17282' class='pdv_class'  title='最新产品' style='width:1200px;height:314px;top:2447px;left:0px; z-index:17'>
<div id='spdv_17282' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:6px;line-height:25px;font-weight:bold;color:">
		最新产品
		</div>
		<div style="float:right;margin-right:10px;display:inline">
		<a href="product/class/" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:50px">

<script>
$(function(){
	var li = $("#pdv_17282 li");
	if( 'right' == 'left' || 'right' == 'right' ) {
		li.parent().height(li.outerHeight(true));
	}
	if("1" == 1)
		$.w.scroll({panelSel: li, "direction": 'right', speed: '1.5', prevSel: '#pdv_17282 .al', nextSel: '#pdv_17282 .ar'});
	else
		$.w.slide({panelSel: li, "direction": 'right', prevSel: '#pdv_17282 .al', nextSel: '#pdv_17282 .ar'});
});
</script>

<link href="css/wuproductlist.css" rel="stylesheet" type="text/css" />
<style>
#pdv_17282 .wuproductlist{background-image: url(); background-position: 0 0; background-repeat: no-repeat;}
#pdv_17282 .al,
#pdv_17282 .ar{position: absolute; display: none; top: 50%; width: 32px; height: 52px; margin-top: -26px; cursor: pointer;background: url(images/sprite.png) 0 0; opacity: 0.2; filter: alpha(opacity=20);}
#pdv_17282 .al{left: -37px;}
#pdv_17282 .ar{right: -37px; background-position: right 0;}
#pdv_17282 .wuproductlist-s1 .al,
#pdv_17282 .wuproductlist-s1 .ar{display: block;}
#pdv_17282 ul{ position: relative; }
#pdv_17282 li{margin-right: 15px;margin-bottom: 15px;}
#pdv_17282 li{
	border-width:1px;
	border-color:#cccccc;
	padding:10px;
}
#pdv_17282 li:hover{
	border-color:#ffd200;
}
#pdv_17282 dt a{font-size: 12px; color:#333333;}
#pdv_17282 dt a:hover{color:#333333;}

</style>
<div class="wuproductlist wuproductlist-s1">
<div class="al"></div>
<div class="ar"></div>

<ul>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?94.html" target="_self" ><img src="picture/1325037644.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?94.html" target="_self"   >产品应用案例</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?93.html" target="_self" ><img src="picture/1325037627.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?93.html" target="_self"   >产品应用案例</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?92.html" target="_self" ><img src="picture/1325037618.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?92.html" target="_self"   >产品应用案例</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?91.html" target="_self" ><img src="picture/1325037574.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?91.html" target="_self"   >产品应用案例</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?90.html" target="_self" ><img src="picture/1325037552.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?90.html" target="_self"   >我的产品名称</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?85.html" target="_self" ><img src="picture/1279603682.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?85.html" target="_self"   >我的产品名称</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?84.html" target="_self" ><img src="picture/1279603643.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?84.html" target="_self"   >我的产品名称</a></dt>
	</dl>
</li>

<li>
	<dl>
	<dd style="width:220px;height:180px">
		<div class="picFit" style="width:220px;height:180px">
		<a href="product/html/?82.html" target="_self" ><img src="picture/1263441984.jpg" style="width:220px;height:180px" border="0" /></a>
		</div>
	</dd>
	<dt style="width:220px;"><a href="product/html/?82.html" target="_self"   >我的产品名称</a></dt>
	</dl>
</li>

</ul>
</div>
<script>
$(function() {
$().picFit("fill");
});
</script>

</div>
</div>

</div>
</div>
</div>
<div id='bottom' style='width:1200px;height:144px;background:left top rgb(18, 18, 18)'>

<div id='pdv_17300' class='pdv_class'  title='友情链接' style='width:707px;height:32px;top:9px;left:20px; z-index:15'>
<div id='spdv_17300' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<ul style="margin:0;padding:0">
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap;color:#ddd;
font-size:14px;line-height:28px;">
友情链接：
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="http://www.qq.com/" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">腾讯网</a> 
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="http://www.taobao.com/" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">淘宝网</a> 
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="https://www.aliyun.com/" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">阿里云</a> 
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="http://www.baidu.com" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">草莓互联</a> 
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="http://www.weboss.hk/" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">网博士</a> 
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="http://www.126.com/" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">126邮箱</a> 
</li>
 
<li style="list-style-type:none;float:left;margin:0px;padding:3px 10px 3px 0px; white-space:nowrap">
<a href="http://www.163.com/" target="_self" style="color:#ddd;
font-size:14px;line-height:28px;">网易</a> 
</li>

</ul>

</div>

</div>
</div>
<div id='pdv_17299' class='pdv_class'   style='width:878px;height:32px;top:43px;left:20px; z-index:18'>
<div id='spdv_17299' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<link href="css/a.css" rel="stylesheet" type="text/css" />
<div id="bottommenu">
<span>导航菜单：</span> 

<a href="index.php" target="_self">网站首页</a>

<a href="page/html/company.php" target="_self">公司简介</a>

<a href="news/class/" target="_self">新闻动态</a>

<a href="product/class" target="_self">产品系列</a>

<a href="page/join/notice.php" target="_self">品牌加盟</a>

<a href="page/service/service.php" target="_self">客户服务</a>

<a href="job/index.php" target="_self">人才招聘</a>
 
</div>


</div>

</div>
</div>
<div id='pdv_17298' class='pdv_class'  title='脚注信息' style='width:886px;height:65px;top:77px;left:20px; z-index:19'>
<div id='spdv_17298' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">
<p>
	<span style="color:#ddd;line-height:2;">地址: 江苏省南京市玄武区玄武湖 电话：020-22043297 邮箱：510551@qq.com</span> 
</p>
<p>
	<span style="color:#ddd;line-height:2;">本页面内容为网站演示数据，前台页面内容都可以在后台修改。</span> 
</p>
</div>

</div>
</div>
<div id='pdv_17296' class='pdv_class'  title='广告位' style='width:100px;height:100px;top:23px;left:1052px; z-index:20'>
<div id='spdv_17296' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">




<img src="picture/1516855924.jpg" border="0" width="100%" />

</div>

</div>
</div>
</div>
</div><div id='bodyex'>

<div id='pdv_17665' class='pdv_class'  title='' style='width:0px;height:0px;top:0px;left:0px; z-index:21'>
<div id='spdv_17665' class='pdv_bodyex' style='overflow:visible;width:100%;'>
<div class="pdv_border">
<div id="wubacktop" title="回到顶部"></div>
<script>
$(function(){
	var W=$(window);
	var o=$("#wubacktop").css({
		right: 40, bottom: 50, width: 50, height: 50, position: 'fixed', zIndex: 999, cursor: 'pointer'
		, background: 'url(images/05.png) no-repeat', opacity: 1, overflow: 'hidden'
	}).hover(function(){
		o.animate({opacity: 0.3}, 500);
	}, function(){
		o.animate({opacity: 1}, 500);
	}).click(function(){W.scrollTop(0);});
	

	if(getCookie("PLUSADMIN")=="SET"){return false}
	
	W.on("resize scroll", function(){
		if(W.scrollTop()<250){
			o.stop(1).animate({height:0}, 500);
		}else{
			o.stop(1).animate({height:50}, 500);
		}
		
	});
});
</script>
</div>

</div>
</div>
</div>
<div id='topex' style='width:100%;height:932px;background:transparent'>
</div>
<div id='contentex' style='display:none;width:100%;height:2763px;background:transparent'>
</div>
<div id='bottomex' style='width:100%;height:144px;background:left top rgb(18, 18, 18)'>
</div>
<div id='advsex'></div>

</body>
</html>
