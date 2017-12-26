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
		<link rel="stylesheet" type="text/css" href="/templates/css/jxs.css"/>
		<title>经销商</title>
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
		<span class="selected bluetom">经销商网点</span>
		<em></em>
		<span class="selected"><a href="/channel">渠道加盟</a></span>
	</div>
</div>

<div class="mobile">
	<style>
		.show {
			display: block !important;
		}
		.hidden {
			display: none !important;
		}
		.invisible {
			visibility: hidden;
		}

	</style>
	<!-- tab -->
	<div class="jxsbox">
		<div class="wdmox">
			附近网点查询
		</div>	
		<div class="selectedbox">
			<div class="selectinput">
				<? $province_names = $db->select("select distributors.`province` from distributors GROUP BY `province`"); ?>
				<select name="selectprovince" id="selectprovince">
                    <option value="0">省份</option>
					<? foreach ($province_names as $name) {?>
						<option value="<? echo $name['province'] ?>"><? echo $name['province'] ?></option>
					<? } ?>
				</select>
				<i></i>
			</div>
			<div class="selectinputip">
				<input type="submit" value="查询">
			</div>
		</div>
		<!-- 结果 -->
		<div class="trucbox">
			<? $provinces = $db->select("select * from distributors"); ?>

			<? foreach ($provinces as $province){ ?>
				<div class="trucbox_tip hidden <? echo $province['province'] ?>">
					<div class="tru_tip_a"><? echo $province['name'] ?><i class="down"></i></div>
                    <div class="tru_tip_div hidden">
                        <div class="tru_box">
                            <p><? echo $province['en_name'] ?></p>
                            <p>区域：<? echo $province['province'] . $province['city'] ?></p>
                            <p>电话：<? echo $province['contact_number'] ?></p>
                            <p>邮箱：<? echo $province['email'] ?></p>
                        </div>
                        <div class="tru_phone">
                            <a target="_blank" href="http://<? echo $_SERVER['HTTP_HOST'] ?>/baidu?id=<? echo $province['id'] ?>" class="map_tr">到这里去</a>
                            <a href="tel:<? echo $province['contact_number'] ?>" class="phone_tr">拨打电话</a>
                        </div>
                    </div>
				</div>
			<? } ?>
		</div>
	</div>
</div>	
<!--底部-->
<footer class="m-footer-bar">
	<p class="copyright">&copy;
        <script>
            document.write(new Date().getFullYear());
        </script>
        <a href="#">Knorr-Bremse AG | www.knorr-bremse.com.cn</a>
    </p>
</footer>
<script src="/templates/js/jquery-min.js" type="text/javascript" charset="utf-8"></script>
<script src="/templates/js/index.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function () {
	    // 根据选择显示经销商
		$(".selectinputip").click(function() {
			$province = $('#selectprovince').val();
            $('.trucbox_tip').addClass('hidden');
            $('.' + $province).removeClass('hidden').addClass('show');
		});

        // 经销商打开展示
        $(".tru_tip_a").click(function () {
            $province = $('#selectprovince').val();
            $(this).parent().parent().find('.tru_tip_a i').addClass('down');
            $(this).parent().parent().find('.tru_tip_div').addClass('hidden');

            $(this).removeClass('down').addClass('up');
            $(this).parent().find('.tru_tip_div').removeClass('hidden').addClass('show');
        });

	});
</script>
</body>
</html>

