<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=11;IE=9;IE=8;IE=7" />
<title>加盟须知-企业通用产品展示模版网站</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="phpweb! V2.1.1" />
<meta name="author" content="Weboss.hk" />
<meta name="copyright" content="2001-2016 Tonv Inc." />
<link rel="shortcut icon" href="../../base/pics/favorite.ico" />
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
var PDV_PAGEID='507'; 
var PDV_RP='../../'; 
var PDV_COLTYPE='page'; 
var PDV_PAGENAME='join_notice'; 
</script>
<div id='page' style='margin:auto;clear:both;overflow:hidden;position:relative;width:100%;'>
<div id='contain' style=' background:transparent;margin:0px auto;padding:0px'>

<div id='top' style=' height:126px;background:transparent'>
<div style='margin:0 auto;position:relative;width:1200px;'>
<div id='pdv_17417' class='pdv_class'  title='顶部背景' style='width:1200px;height:124px;top:0px;left:0px; z-index:4'>
<div id='spdv_17417' class='pdv_top' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 124px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/1516868596.png); background-color:transparent;background-position:center top; background-repeat: repeat-x;opacity:1"></div>
</div>
</div>

</div>
</div>
</div><div style='margin:0 auto;position:relative;width:1200px;'>
<div id='pdv_17408' class='pdv_class'   style='width:843px;height:110px;top:0px;left:357px; z-index:6'>
<div id='spdv_17408' class='pdv_top' style='overflow:visible;width:100%;'>
<div class="pdv_border">

<script>
function getTop(){
	return document.documentElement.scrollTop;
}
$(function(){
	$("#pdv_17408 .bg").css("opacity", "0.85");

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
			$.each("网站标志,顶部背景".split(","), function(i, v){
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
#pdv_17408 .wumainmenu{padding-bottom: 0;}
#pdv_17408 .bg{_height: 110px; background: transparent; opacity: 0.85;}
#pdv_17408 .line{background: #ff0000; height: 0;}
#pdv_17408 .bd{height: 110px; padding-left: 0; padding-right: 0;}
#pdv_17408 ul{height: 110px;}
#pdv_17408 dt{height: 110px;}
#pdv_17408 li{margin-right: 0; width: 120px; }

#pdv_17408 dt a{line-height:110px; background-color: transparent; background-image: url();
color: #000000; font-size:16px; font-weight:normal; border-right-color: transparent;}
#pdv_17408 .cur dt a,
#pdv_17408 dt a:hover{color: #ffffff; background-color: #febe30; background-image: url();}
#pdv_17408 dt a span{line-height:20px; width: 120px; 
color: #b9cedf; font-size:12px; }
#pdv_17408 .cur dt a span,
#pdv_17408 dt a:hover span{color: #ffffff;}
#pdv_17408 dd {padding: 0 0;  width: 120px; 
background: #005bac;}
#pdv_17408 dd a{line-height:28px; background: transparent; background-image: url();
color: #ffffff; font-size:12px; font-weight:normal;}
#pdv_17408 dd a:hover{color: #ffffff; background: #ff7e00; background-image: url();}

</style>
<div id="menumain" class="wumainmenu wumainmenu-s1">
<div class="bg"></div>
<div class="line"></div>
<div class="bd">
<ul>

<li class="n1">
<dl><dt>
<a href="../../index.php" ><span></span>网站首页</a>
</dt><dd></dd></dl>
</li>

<li class="n2">
<dl><dt>
<a href="../../page/html/company.php" ><span></span>公司简介</a>
</dt><dd></dd></dl>
</li>

<li class="n3">
<dl><dt>
<a href="../../news/class/" ><span></span>新闻动态</a>
</dt><dd></dd></dl>
</li>

<li class="n4">
<dl><dt>
<a href="../../product/class" ><span></span>产品系列</a>
</dt><dd></dd></dl>
</li>

<li class="n5">
<dl><dt>
<a href="../../page/join/notice.php" ><span></span>品牌加盟</a>
</dt><dd></dd></dl>
</li>

<li class="n6">
<dl><dt>
<a href="../../page/service/service.php" ><span></span>客户服务</a>
</dt><dd></dd></dl>
</li>

<li class="n7">
<dl><dt>
<a href="../../job/index.php" ><span></span>人才招聘</a>
</dt><dd></dd></dl>
</li>

</ul>
</div>
</div>
<script>
$(function(){
	$("#pdv_17408 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_17408 .n"+parseInt('0')).addClass("cur");
	$("#pdv_17408 dd").css("opacity", '0.9');
	if('0' != 1) return;
	$("#pdv_17408 dd").each(function(){
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
	$("#pdv_17408 li").hover(function(){
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
<div id='pdv_17416' class='pdv_class'  title='网站标志' style='width:241px;height:49px;top:31px;left:0px; z-index:7'>
<div id='spdv_17416' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">


<a href="#"><img src="picture/1516845083.png" border="0" /></a>


</div>

</div>
</div>
</div>
</div>
<div id='content' style='width:1200px;height:685px;background:transparent;margin:0px auto'>

<div id='pdv_17407' class='pdv_class'  title='全屏通栏广告背景' style='width:1200px;height:53px;top:0px;left:0px; z-index:1'>
<div id='spdv_17407' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 53px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/1516867390.jpg); background-color:transparent;background-position:center top; background-repeat: repeat-x;opacity:1"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17410' class='pdv_class'  title='全屏通栏广告背景' style='width:1200px;height:112px;top:161px;left:0px; z-index:2'>
<div id='spdv_17410' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 112px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/edb0a76cfc534a4c8048de1ee7ac2644.gif); background-color:#f1f1f1;background-position:center top; background-repeat: repeat;opacity:1"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17413' class='pdv_class'  title='' style='width:1200px;height:45px;top:0px;left:0px; z-index:3'>
<div id='spdv_17413' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">
 
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<a href="../../">企业通用产品展示模版网站</a> &gt; 加盟须知

</div>

</div>

</div>
</div>
<div id='pdv_17418' class='pdv_class'  title='' style='width:1200px;height:522px;top:161px;left:0px; z-index:5'>
<div id='spdv_17418' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:6px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">
<link href="css/pagecontent.css" rel="stylesheet" type="text/css" />
<h2 style="text-align:center;margin:0px;padding:0px;border:0px;font-weight:400;font-size:30px;line-height:112px;padding-bottom:40px;">
	加盟须知
</h2>
<div id='pagecontent' class='page_content'>1.具有合法资格的法人或自然人。<br />2.具有管理协调能力，有家具品牌经营经验。<br />3.具有强烈的事业心，并有追求成功的欲望。<br />4.具有一定的经济实力及长远的投资眼光。<br />5.能正确看待和承担风险意识。 <br />6.应在其指定销售区域进行销售，不得跨地区经营。<br />7.各加盟商须向我公司提出书面申请，如实填写各项内容。<br /><br />1.具有合法资格的法人或自然人。<br />2.具有管理协调能力，有家具品牌经营经验。<br />3.具有强烈的事业心，并有追求成功的欲望。<br />4.具有一定的经济实力及长远的投资眼光。<br />5.能正确看待和承担风险意识。 <br />6.应在其指定销售区域进行销售，不得跨地区经营。<br />7.各加盟商须向我公司提出书面申请，如实填写各项内容。 </div>
<script>

$(window).load(function(){
	$("#pagecontent").find("img").hide();
	var w=$("#pagecontent")[0].offsetWidth;
	$("#pagecontent").find("img").each(function(){
		$(this).show();
		if(this.offsetWidth>w){
			this.style.width=w + "px";
		}
	});
		
});

</script>

</div>
</div>

</div>
</div>
<div id='pdv_17414' class='pdv_class'  title='内容标题列表' style='width:1200px;height:57px;top:81px;left:0px; z-index:12'>
<div id='spdv_17414' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<style>
#pdv_17414 .wupagelist{
	font-family: "微软雅黑"; position: relative; font-size: 0;
	border-top: 0px solid #ddd; border-bottom: 0px solid #ddd; 
	padding-top:0; padding-bottom:0; text-align: center;}

#pdv_17414 .bg{width: 100%; height: 100%; left: 0; top: 0; position: absolute; background: ; }
#pdv_17414 .bg-1{width: 1920px; margin-left: -960px;  left: 50%; }
#pdv_17414 ul{position: relative; overflow: hidden;}
#pdv_17414 li{display: inline-block; *display:inline; *zoom:1; vertical-align: middle;}
#pdv_17414 li a{
	display: block; text-decoration:  none; text-align: center; border: 1px solid #000;
	background-color: #e2e2e2; background-image:url(); color: #333333; border-radius:25px;
	border-width:0; border-color:#000000; font-size: 18px;
	line-height: 50px; width: 180px; margin-right: 20px; margin-bottom: 20px;
 }
#pdv_17414 li a:hover{
    background-color: #fc9d00; background-image:url(); color: #ffffff; border-color:#79bc29;
}
</style>
<div class="wupagelist">
<div class="bg bg-1"></div>
<ul>

<li><a href="../../page/join/notice.php" target="_self">加盟须知</a></li>

<li><a href="../../page/join/condition.php" target="_self">加盟条件</a></li>

<li><a href="../../page/join/method.php" target="_self">加盟程序</a></li>

<li><a href="../../page/join/application.php" target="_self">加盟申请</a></li>

<li><a href="../../page/join/display.php" target="_self">门店展示</a></li>

</ul>
</div>

</div>

</div>
</div>
</div>
<div id='bottom' style='width:1200px;height:144px;background:left top rgb(18, 18, 18)'>

<div id='pdv_17415' class='pdv_class'  title='友情链接' style='width:707px;height:32px;top:9px;left:20px; z-index:8'>
<div id='spdv_17415' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
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
<div id='pdv_17411' class='pdv_class'   style='width:878px;height:32px;top:43px;left:20px; z-index:9'>
<div id='spdv_17411' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<link href="css/a.css" rel="stylesheet" type="text/css" />
<div id="bottommenu">
<span>导航菜单：</span> 

<a href="../../index.php" target="_self">网站首页</a>

<a href="../../page/html/company.php" target="_self">公司简介</a>

<a href="../../news/class/" target="_self">新闻动态</a>

<a href="../../product/class" target="_self">产品系列</a>

<a href="../../page/join/notice.php" target="_self">品牌加盟</a>

<a href="../../page/service/service.php" target="_self">客户服务</a>

<a href="../../job/index.php" target="_self">人才招聘</a>
 
</div>


</div>

</div>
</div>
<div id='pdv_17412' class='pdv_class'  title='脚注信息' style='width:886px;height:65px;top:77px;left:20px; z-index:10'>
<div id='spdv_17412' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
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
<div id='pdv_17409' class='pdv_class'  title='广告位' style='width:100px;height:100px;top:23px;left:1052px; z-index:11'>
<div id='spdv_17409' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">




<img src="picture/1516855924.jpg" border="0" width="100%" />

</div>

</div>
</div>
</div>
</div><div id='bodyex'>

<div id='pdv_17701' class='pdv_class'  title='' style='width:0px;height:0px;top:0px;left:0px; z-index:13'>
<div id='spdv_17701' class='pdv_bodyex' style='overflow:visible;width:100%;'>
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
<div id='topex' style='width:100%;height:126px;background:transparent'>
</div>
<div id='contentex' style='display:none;width:100%;height:685px;background:transparent'>
</div>
<div id='bottomex' style='width:100%;height:144px;background:left top rgb(18, 18, 18)'>
</div>
<div id='advsex'></div>

</body>
</html>
