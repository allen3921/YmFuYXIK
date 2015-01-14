<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>index_banar.html</title>

		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="this is my page">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<!--<link rel="stylesheet" type="text/css" href="./styles.css">-->
		<link rel="stylesheet" type="text/css"
			href="../../includes/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css"
			href="../../includes/bootstrap/css/bootstrap-theme.css">
		<script type="text/javascript"
			src="../../includes/easyui/jquery.min.js"></script>
		<script type="text/javascript"
			src="../../includes/bootstrap/js/bootstrap.js"></script>
		<style type="text/css">


		</style>
		<script type="text/javascript">
  		$(document).ready(function(){
			$(".switch_car").click(function(i){
				if($(this).attr("id")=="xiaomian"){ $("#show_price_detail").attr("src","../../includes/images/kind_car_xiaomian.png");}
				if($(this).attr("id")=="jinbei"){ $("#show_price_detail").attr("src","../../includes/images/kind_car_jinbei.png");}
				if($(this).attr("id")=="xianghuo"){ $("#show_price_detail").attr("src","../../includes/images/kind_car_xianghuo.png");}

			});
			$('.carousel').carousel({  interval: 2000});
			$('.carousel').mouseover(function(){
				$('.carousel').carousel({  interval: 5000});
			});
			$('.carousel').mouseout(function(){
				$('.carousel').carousel({  interval: 2000});
			});
			$("#xiaomian").mouseover(function(){
				$("#xiaomian > img").attr("src","../../includes/images/kind_car_font_xiaomian_hover.png");
			});
			$("#xiaomian").mouseout(function(){
				$("#xiaomian > img").attr("src","../../includes/images/kind_car_font_xiaomian.png");
			});
			$("#jinbei").mouseover(function(){
				$("#jinbei > img").attr("src","../../includes/images/kind_car_font_jinbei_hover.png");
			});
			$("#jinbei").mouseout(function(){
				$("#jinbei > img").attr("src","../../includes/images/kind_car_font_jinbei.png");
			});
			$("#xianghuo").mouseover(function(){
				$("#xianghuo > img").attr("src","../../includes/images/kind_car_font_xianghuo_hover.png");
			});
			$("#xianghuo").mouseout(function(){
				$("#xianghuo > img").attr("src","../../includes/images/kind_car_font_xianghuo.png");
			});
  		});
  	</script>
  	<style type="text/css">
  	 .carousel-control {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  width: 10%;
		  font-size: 20px;
		  color: #fff;
		  text-align: center;
		  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
		  filter: alpha(opacity=50);
		  opacity: .0;
		}
	.carousel-control.left {
		  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
		  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
		  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
		  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
		  background-repeat: repeat-x;
		}
	.carousel-control.right {
		  right: 0;
		  left: auto;
		  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
		  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
		  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
		  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
		  background-repeat: repeat-x;
		}
	 .carousel-control:hover,
	 .carousel-control:focus {
		  color: #fff;
		  text-decoration: none;
		  filter: alpha(opacity=90);
		  outline: 0;
		  opacity: .2;
		}
  	</style>
	</head>

	<body>

		<div class="container-fluid"
			style="height: 100%; background-image: url(../../includes/images/banar_index_screen_first_background.png)">
			<div style="height:100%; background-image: url(../../includes/images/banar_index_screen_first.png)">

			</div>
		</div>
		<div class="container" style="width: 100%;height:100%;">
			<div id="carousel-example" class="carousel slide"
				data-ride="carousel" style="">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example" data-slide-to="0"
						class="active"></li>
					<li data-target="#carousel-example" data-slide-to="1"></li>
					<li data-target="#carousel-example" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="../../includes/images/banar_index_screen_second_01.png"/>
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<img src="../../includes/images/banar_index_screen_second_02.png"/>
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<img src="../../includes/images/banar_index_screen_second_03.png"/>
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<!-- Controls -->
				 <a class="carousel-control" href="#carousel-example" data-slide="prev"></a>
 				 <a class="carousel-control" href="#carousel-example" data-slide="next"></a>
			</div>
		</div>
		<div class="container" id="screen_third_div" style="width: 100%;height:100%;">
			<table style="margin:70px 100px 100px 250px;">
				<tr>
					<td style="width:30%;" align="center">
						<div style="height:80px;">
							<a href="#2014"class="switch_car" id="xiaomian" style="text-decoration:none" ><img alt="" src="../../includes/images/kind_car_font_xiaomian.png"></a>
						</div>
						<div style="height:80px;">
							<a href="#2014"class="switch_car" id="jinbei" style="text-decoration:none" ><img alt="" src="../../includes/images/kind_car_font_jinbei.png"></a>
						</div>
						<div style="height:80px;">
							<a href="#2014"class="switch_car" id="xianghuo" style="text-decoration:none" ><img alt="" src="../../includes/images/kind_car_font_xianghuo.png"></a>
						</div>
					</td>
					<td style="width:70%">
						<img alt="" id="show_price_detail" src="../../includes/images/kind_car_xiaomian.png" style="width:500px;height:400px;">
					</td>
				</tr>
			</table>
		</div>
		<div class="container" style="width:100%;background-color:#ff7f00">
			<img alt="" src="../../includes/images/banar_fenlei.png" style="width:100%;">
		</div>
		<div style="width:100%;height:100px;background-color:#E0E0E0;text-align:center">
			<table style="width:100%;">
				<tr>
					<td  style="width:100%;text-align:center;">
						<ul class="nav nav-pills" role="tablist" style="margin-left:40%;color:#9D9D9D">
						  <li role="presentation"><a href="./index_banar.html" style="font-weight:bold;color:#9D9D9D">首页</a></li>
						  <li role="presentation"><a href="./common/about.html" style="font-weight:bold;color:#9D9D9D">关于</a></li>
						  <li role="presentation"><a href="http://123.57.69.107:88/" style="font-weight:bold;color:#9D9D9D">博客</a></li>
						  <li role="presentation"><a href="./common/questions.html" style="font-weight:bold;color:#9D9D9D">常见问题</a></li>
						   <li role="presentation"><a href="./common/contactUs.html" style="font-weight:bold;color:#9D9D9D">联系我们</a></li>
						</ul>
					</td>
				</tr>
				<tr>
					<td style="width:100%;text-align:center;">
						<span style="color:#ADADAD">banar&2014</span>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
