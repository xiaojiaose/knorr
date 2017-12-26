<?php
$province_names = $db->select("select region_name from region where region_type = 1 order by region_id asc");
?>
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
		<link rel="stylesheet" type="text/css" href="/templates/css/fwzx.css"/>
		<title>服务咨询</title>
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
		<span class="selected bluetom">服务咨询</span>
		
	</div>
</div>



<form name="myfrom" method="post" action="/submit">
<div class="mobile">
	<!-- tab -->
	<div class="qdjmbox">
		
		<div class="qdj_b">
			<input type="text" class="text350" maxlength="20" name="name" id="name" placeholder="姓名">
		</div>
		<div class="qdj_c">
			<div class="qdj_c1">
				称呼
			</div>
			<div class="qdj_c2">
				<ul class="ops">
					<li class="shright">
                        <input type="radio" value="1" name="sex" id="la1" checked class="input_typea1"/><label class="input_typeb1" for="la1">先生</label></li>
					<li>
                        <input type="radio" value="2" name="sex" id="la2" class="input_typea1"/><label class="input_typeb1" for="la2">女士</label></li>
				</ul> 
			</div>
		</div>
		<div class="qdj_a" style="height: 128px; background: #ebebeb">
            <textarea id="contentzx" name="content" style="height: 128px" cols="" rows="" class="input_txt" placeholder="您想咨询的内容（5-100个字以内）" onkeyup="checkContentNum()"></textarea>
		</div>
		<div class="qdj_d">
			<select name="city" id="city">
                <option value="">所在省份</option>
                <? foreach ($province_names as $name) {?>
                    <option value="<? echo $name['region_name'] ?>"><? echo $name['region_name'] ?></option>
                <? } ?>
			</select>
			<i></i>
		</div>
		<div class="qdj_e">
			<input type="text" class="text350" name="mobile" id="mobile" maxlength="11" placeholder="电话">
		</div>
		<div class="qdj_f">
			<input type="text" class="text350" maxlength="40" name="email" id="email" placeholder="邮箱">
		</div>
        <input type="hidden" name="type" value="consult">
		<div class="sub_tab">
            <div class="pcloginbtnbox">
                <button class="chengse" type="submit">提交</button>
            </div>
        </div>
	</div>
	
	
</div>
</form>
<!--底部-->
<footer class="m-footer-bar">
	<p class="copyright">&copy;
        <script>
            document.write(new Date().getFullYear());
            function checkContentNum() {

            }
        </script>
        <a href="#">Knorr-Bremse AG | www.knorr-bremse.com.cn</a>
    </p>
</footer>
<script src="/templates/js/jquery-min.js" type="text/javascript" charset="utf-8"></script>
<script src="/templates/js/index.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
