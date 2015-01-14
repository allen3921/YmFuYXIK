<!DOCTYPE HTML>
<html lang="en-GB">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<?php echo HTML::style('css/bootstrap.min.css') ;?>
	<?php echo HTML::style('css/bootstrap-responsive.min.css') ;?>
	<?php echo HTML::style('css/style.css') ;?>
</head>
<body>
<div class="logo">

		<h2>搬哪儿呢</h2>

 </div>
	<div class="header">
		@if ( Auth::guest() )
		    {{ HTML::link('/', '首页') }} |  {{ HTML::link('driver/login', '司机登录') }} | {{ HTML::link('driver/register', '司机注册') }}
			游客
		@else
		{{ HTML::link('driver/logout', '退出') }}
		@endif
		<hr />
	</div>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>
