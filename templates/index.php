
<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />			
	<meta content="telephone=no" name="format-detection" />
		<!--这个用来重置-->
		<!--<link rel="stylesheet" type="text/css" href="css/reset.css"/>-->
		<!--这个用来定义公用-->
		<link rel="stylesheet" type="text/css" href="/templates/css/public.css"/>
		<!--这个是内容部分-->
		<link rel="stylesheet" type="text/css" href="/templates/css/index.css"/>
		<title>售后首页</title>
	</head>
<body>
<header>
	<h1><a href="/">克诺尔</a></h1>
	<a href="/" class="logo" rel="nofollow">
		<img src="/templates/images/icon1.png" onerror="this.onerror=null;this.src='/templates/images/icon1.png'" id="loginSrc">
	</a>	
</header>

<div class="brand">
	<div class="tab-title">
		<span class="selected bluetom">售后服务</span>
	</div>
</div>




<div class="mobile">
	<!-- tab -->
	<div class="tabdiv">
		<a href="http://<? echo $_SERVER['HTTP_HOST'] ?>/cpcx" class="tabdiv1"><span>产品查询</span></a>
		<a href="http://<? echo $_SERVER['HTTP_HOST'] ?>/product" class="tabdiv2"><span>热销产品</span></a>
		<a href="http://<? echo $_SERVER['HTTP_HOST'] ?>/jieguo1" class="tabdiv3"><span>渠道加盟</span></a>
		<a href="http://<? echo $_SERVER['HTTP_HOST'] ?>/jieguo3" class="tabdiv4"><span>在线培训</span></a>
		<a href="http://<? echo $_SERVER['HTTP_HOST'] ?>/consult" class="tabdiv5"><span>服务咨询</span></a>
		<a href="http://<? echo $_SERVER['HTTP_HOST'] ?>/jxs" class="tabdiv6"><span>经销商网点</span></a>
	</div>	
</div>	
<!--底部-->
<?php
include_once 'footer.html';
?>

