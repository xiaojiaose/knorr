<?php
$province_names = $db->select("select region_name from region where region_type = 1 order by region_id asc");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <!--这个用来重置-->
    <!--<link rel="stylesheet" type="text/css" href="css/reset.css"/>-->
    <!--这个用来定义公用-->
    <link rel="stylesheet" type="text/css" href="/templates/css/public.css"/>
    <!--这个是内容部分-->
    <link rel="stylesheet" type="text/css" href="/templates/css/qdjm.css"/>
    <title>渠道加盟</title>
</head>
<body>
<header>
    <h1><a href="/">克诺尔</a></h1>
    <a href="/" class="logo" rel="nofollow">
        <img src="/templates/images/icon1.png" onerror="this.onerror=null;this.src='/templates/images/icon1.png'"
             id="loginSrc">
    </a>
</header>

<div class="brand">
    <div class="tab-title">
        <span class="selected"><a href="/jxs">经销商网点</a></span>
        <em></em>
        <span class="selected bluetom">渠道加盟</span>

    </div>
</div>

<form name="myfrom" method="post" action="/submit"  onsubmit="return verify(1)">
<div class="mobile">
    <!-- tab -->
    <div class="qdjmbox">
        <div class="qdj_d">
            <select name="product" id="product">
                <option value="">意向代理的产品</option>
                <option value="空气供给系统">空气供给系统</option>
                <option value="车辆控制系统">车辆控制系统</option>
                <option value="轮端系统">轮端系统</option>
                <option value="传动系统部件">传动系统部件</option>
                <option value="转向系统">转向系统</option>
                <option value="挂车系统">挂车系统</option>
                <option value="售后服务系统">售后服务系统</option>
            </select>
        </div>

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
                        <input type="radio" value="1" name="sex" checked id="la1" class="input_typea1"/><label
                                class="input_typeb1" for="la1">先生</label>
                    </li>
                    <li>
                        <input type="radio" value="2" name="sex" id="la2" class="input_typea1"/><label
                                class="input_typeb1" for="la2">女士</label>
                    </li>
                </ul>
            </div>
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
        <input type="hidden" name="type" value="channel">
        <div class="sub_tab">
            <div class="pcloginbtnbox">
                <button class="chengse" type="submit">提交</button>
            </div>
        </div>
    </div>


</div>
</form>
<script>
    function verify(a) {
        var name = $("#name").val();
        var mobile = $("#mobile").val();
        var compay = $("#product").val();
        var email = $("#email").val();
        var city = $("#city").val(); // || compay|| gzhangye || cshangye || city

        if (!compay) {
            alert('请选择意向代理产品');
            return false;
        }
        if (!name) {
            alert('请输入姓名');
            return false;
        }
        if (!city) {
            alert('请输入所在城市');
            return false;
        }

        //手机号正则
        var phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/;
        if (!phoneReg.test(mobile)) {
            alert('请输入有效的手机号码！');
            return false;
        }

        var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
        if (!re.test(email)) {
            alert("请输入有效的邮箱");
            return false;
        }

    }

</script>
<!--底部-->
<?php
include_once 'footer.html';
?>

