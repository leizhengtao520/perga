<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=11;IE=9;IE=8;IE=7" />
<title>企业招聘-企业通用产品展示模版网站</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="phpweb! V2.1.1" />
<meta name="author" content="Weboss.hk" />
<meta name="copyright" content="2001-2016 Tonv Inc." />
<link rel="shortcut icon" href="../base/pics/favorite.ico" />
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
var PDV_PAGEID='326'; 
var PDV_RP='../'; 
var PDV_COLTYPE='job'; 
var PDV_PAGENAME='main'; 
</script>
<div id='page' style='margin:auto;clear:both;overflow:hidden;position:relative;width:100%;'>
<div id='contain' style=' background:transparent;margin:0px auto;padding:0px'>

<div id='top' style=' height:126px;background:transparent'>
<div style='margin:0 auto;position:relative;width:1200px;'>
<div id='pdv_17646' class='pdv_class'  title='顶部背景' style='width:1200px;height:124px;top:0px;left:0px; z-index:3'>
<div id='spdv_17646' class='pdv_top' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 124px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/1516868596.png); background-color:transparent;background-position:center top; background-repeat: repeat-x;opacity:1"></div>
</div>
</div>

</div>
</div>
</div><div style='margin:0 auto;position:relative;width:1200px;'>
<div id='pdv_17637' class='pdv_class'   style='width:843px;height:110px;top:0px;left:357px; z-index:4'>
<div id='spdv_17637' class='pdv_top' style='overflow:visible;width:100%;'>
<div class="pdv_border">

<script>
function getTop(){
	return document.documentElement.scrollTop;
}
$(function(){
	$("#pdv_17637 .bg").css("opacity", "0.85");

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
#pdv_17637 .wumainmenu{padding-bottom: 0;}
#pdv_17637 .bg{_height: 110px; background: transparent; opacity: 0.85;}
#pdv_17637 .line{background: #ff0000; height: 0;}
#pdv_17637 .bd{height: 110px; padding-left: 0; padding-right: 0;}
#pdv_17637 ul{height: 110px;}
#pdv_17637 dt{height: 110px;}
#pdv_17637 li{margin-right: 0; width: 120px; }

#pdv_17637 dt a{line-height:110px; background-color: transparent; background-image: url();
color: #000000; font-size:16px; font-weight:normal; border-right-color: transparent;}
#pdv_17637 .cur dt a,
#pdv_17637 dt a:hover{color: #ffffff; background-color: #febe30; background-image: url();}
#pdv_17637 dt a span{line-height:20px; width: 120px; 
color: #b9cedf; font-size:12px; }
#pdv_17637 .cur dt a span,
#pdv_17637 dt a:hover span{color: #ffffff;}
#pdv_17637 dd {padding: 0 0;  width: 120px; 
background: #005bac;}
#pdv_17637 dd a{line-height:28px; background: transparent; background-image: url();
color: #ffffff; font-size:12px; font-weight:normal;}
#pdv_17637 dd a:hover{color: #ffffff; background: #ff7e00; background-image: url();}

</style>
<div id="menumain" class="wumainmenu wumainmenu-s1">
<div class="bg"></div>
<div class="line"></div>
<div class="bd">
<ul>

<li class="n1">
<dl><dt>
<a href="../index.php" ><span></span>网站首页</a>
</dt><dd></dd></dl>
</li>

<li class="n2">
<dl><dt>
<a href="../page/html/company.php" ><span></span>公司简介</a>
</dt><dd></dd></dl>
</li>

<li class="n3">
<dl><dt>
<a href="../news/class/" ><span></span>新闻动态</a>
</dt><dd></dd></dl>
</li>

<li class="n4">
<dl><dt>
<a href="../product/class" ><span></span>产品系列</a>
</dt><dd></dd></dl>
</li>

<li class="n5">
<dl><dt>
<a href="../page/join/notice.php" ><span></span>品牌加盟</a>
</dt><dd></dd></dl>
</li>

<li class="n6">
<dl><dt>
<a href="../page/service/service.php" ><span></span>客户服务</a>
</dt><dd></dd></dl>
</li>

<li class="n7">
<dl><dt>
<a href="../job/index.php" ><span></span>人才招聘</a>
</dt><dd></dd></dl>
</li>

</ul>
</div>
</div>
<script>
$(function(){
	$("#pdv_17637 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_17637 .n"+parseInt('0')).addClass("cur");
	$("#pdv_17637 dd").css("opacity", '0.9');
	if('0' != 1) return;
	$("#pdv_17637 dd").each(function(){
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
	$("#pdv_17637 li").hover(function(){
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
<div id='pdv_17645' class='pdv_class'  title='网站标志' style='width:241px;height:49px;top:31px;left:0px; z-index:5'>
<div id='spdv_17645' class='pdv_top' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">


<a href="#"><img src="picture/1516845083.png" border="0" /></a>


</div>

</div>
</div>
</div>
</div>
<div id='content' style='width:1200px;height:949px;background:transparent;margin:0px auto'>

<div id='pdv_17636' class='pdv_class'  title='全屏通栏广告背景' style='width:1200px;height:53px;top:0px;left:0px; z-index:1'>
<div id='spdv_17636' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 53px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/1516867390.jpg); background-color:transparent;background-position:center top; background-repeat: repeat-x;opacity:1"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17639' class='pdv_class'  title='全屏通栏广告背景' style='width:1200px;height:112px;top:161px;left:0px; z-index:2'>
<div id='spdv_17639' class='pdv_content' style='overflow:inherit;width:100%;height:100%'>
<div class="pdv_border">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 112px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(images/d0dde43936234eebb9858ab7ab0a4eaf.gif); background-color:#f1f1f1;background-position:center top; background-repeat: repeat;opacity:1"></div>
</div>
</div>

</div>
</div>
<div id='pdv_17643' class='pdv_class'  title='内容标题列表' style='width:1200px;height:57px;top:81px;left:0px; z-index:10'>
<div id='spdv_17643' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<style>
#pdv_17643 .wupagelist{
	font-family: "微软雅黑"; position: relative; font-size: 0;
	border-top: 0px solid #ddd; border-bottom: 0px solid #ddd; 
	padding-top:0; padding-bottom:0; text-align: center;}

#pdv_17643 .bg{width: 100%; height: 100%; left: 0; top: 0; position: absolute; background: ; }
#pdv_17643 .bg-1{width: 1920px; margin-left: -960px;  left: 50%; }
#pdv_17643 ul{position: relative; overflow: hidden;}
#pdv_17643 li{display: inline-block; *display:inline; *zoom:1; vertical-align: middle;}
#pdv_17643 li a{
	display: block; text-decoration:  none; text-align: center; border: 1px solid #000;
	background-color: #e2e2e2; background-image:url(); color: #333333; border-radius:25px;
	border-width:0; border-color:#000000; font-size: 18px;
	line-height: 50px; width: 180px; margin-right: 20px; margin-bottom: 20px;
 }
#pdv_17643 li a:hover{
    background-color: #fc9d00; background-image:url(); color: #ffffff; border-color:#79bc29;
}
</style>
<div class="wupagelist">
<div class="bg bg-1"></div>
<ul>

<li><a href="../page/html/company.php" target="_self">公司简介</a></li>

<li><a href="../page/html/honor.php" target="_self">公司荣誉</a></li>

<li><a href="../page/html/culture.php" target="_self">公司文化</a></li>

<li><a href="../page/html/ethic.php" target="_self">经营理念</a></li>

<li><a href="../page/html/sale.php" target="_self">营销网络</a></li>

</ul>
</div>

</div>

</div>
</div>
<div id='pdv_17648' class='pdv_class'  title='职位查询' style='width:1200px;height:758px;top:189px;left:0px; z-index:11'>
<div id='spdv_17648' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border">

<link href="css/jobquery.css" rel="stylesheet" type="text/css" />
<h2 style="text-align:center;margin:0px;padding:0px;border:0px;font-weight:400;font-size:30px;line-height:60px;padding-bottom:60px;">
	人才招聘
</h2>
<div id="jobquery">
<ul >
	<li class="cap">
	
	<div class="bt"><strong>招聘职位</strong></div>
	<div class="cl"><strong>详情</strong></div>
	<div class="au"><strong>招聘人数</strong></div>
	<div class="bk"><strong>工作地点</strong></div>
	
	</li>
</ul>
<ul class="queryul">
 
<li>
	
	<div class="bt"><a href="../job/html/?5.html" target="_self" >研发项目经理</a></div>
	<div class="cl"><a href="../job/html/?5.html" target="_self" >详情</a></div>
	<div class="au">1</div>
	<div class="bk">上海</div>
	


</li>
 
<li>
	
	<div class="bt"><a href="../job/html/?7.html" target="_self" >模具设计总监</a></div>
	<div class="cl"><a href="../job/html/?7.html" target="_self" >详情</a></div>
	<div class="au">1</div>
	<div class="bk">上海</div>
	


</li>
 
<li>
	
	<div class="bt"><a href="../job/html/?4.html" target="_self" >华东区销售经理</a></div>
	<div class="cl"><a href="../job/html/?4.html" target="_self" >详情</a></div>
	<div class="au">1</div>
	<div class="bk">上海</div>
	


</li>
 
<li>
	
	<div class="bt"><a href="../job/html/?3.html" target="_self" >华东区销售经理</a></div>
	<div class="cl"><a href="../job/html/?3.html" target="_self" >详情</a></div>
	<div class="au">1</div>
	<div class="bk">上海</div>
	


</li>
 
<li>
	
	<div class="bt"><a href="../job/html/?2.html" target="_self" >华东区销售经理</a></div>
	<div class="cl"><a href="../job/html/?2.html" target="_self" >详情</a></div>
	<div class="au">1</div>
	<div class="bk">上海</div>
	


</li>
 
<li>
	
	<div class="bt"><a href="../job/html/?1.html" target="_self" >华东区销售经理</a></div>
	<div class="cl"><a href="../job/html/?1.html" target="_self" >详情</a></div>
	<div class="au">1</div>
	<div class="bk">上海</div>
	


</li>

</ul>
</div>

	  <div class="pagess"><ul><li class="pbutton"><a href=/w072/job/index.php?page=1&amp;key=>首页</a></li><li class="pbutton">上一页</li><li class="pagesnow">1</li><li class="pbutton">下一页</li><li class="opt"><select onChange="window.location=this.options[this.selectedIndex].value"><option value="/w072/job/index.php?page=1&amp;key=" selected>第1页</option></select></li><li class="pbutton"><a href=/w072/job/index.php?page=1&amp;key=>尾页</a></li></ul></div>






</div>

</div>
</div>
<div id='pdv_17649' class='pdv_class'  title='当前位置' style='width:1200px;height:45px;top:0px;left:0px; z-index:12'>
<div id='spdv_17649' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">
 
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<a href="../">企业通用产品展示模版网站</a> 
 
&gt; <a href="../job/" >企业招聘</a> 

</div>

</div>

</div>
</div>
</div>
<div id='bottom' style='width:1200px;height:144px;background:left top rgb(18, 18, 18)'>

<div id='pdv_17644' class='pdv_class'  title='友情链接' style='width:707px;height:32px;top:9px;left:20px; z-index:6'>
<div id='spdv_17644' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
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
<div id='pdv_17640' class='pdv_class'   style='width:878px;height:32px;top:43px;left:20px; z-index:7'>
<div id='spdv_17640' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">

<link href="css/a.css" rel="stylesheet" type="text/css" />
<div id="bottommenu">
<span>导航菜单：</span> 

<a href="../index.php" target="_self">网站首页</a>

<a href="../page/html/company.php" target="_self">公司简介</a>

<a href="../news/class/" target="_self">新闻动态</a>

<a href="../product/class" target="_self">产品系列</a>

<a href="../page/join/notice.php" target="_self">品牌加盟</a>

<a href="../page/service/service.php" target="_self">客户服务</a>

<a href="../job/index.php" target="_self">人才招聘</a>
 
</div>


</div>

</div>
</div>
<div id='pdv_17641' class='pdv_class'  title='脚注信息' style='width:886px;height:65px;top:77px;left:20px; z-index:8'>
<div id='spdv_17641' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
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
<div id='pdv_17638' class='pdv_class'  title='广告位' style='width:100px;height:100px;top:23px;left:1052px; z-index:9'>
<div id='spdv_17638' class='pdv_bottom' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border">




<img src="picture/1516855924.jpg" border="0" width="100%" />

</div>

</div>
</div>
</div>
</div><div id='bodyex'>

<div id='pdv_17696' class='pdv_class'  title='' style='width:0px;height:0px;top:0px;left:0px; z-index:13'>
<div id='spdv_17696' class='pdv_bodyex' style='overflow:visible;width:100%;'>
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
<div id='contentex' style='display:none;width:100%;height:949px;background:transparent'>
</div>
<div id='bottomex' style='width:100%;height:144px;background:left top rgb(18, 18, 18)'>
</div>
<div id='advsex'></div>

</body>
</html>
