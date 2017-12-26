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
    <link rel="stylesheet" type="text/css" href="/templates/css/jieguo.css"/>
    <title>欢迎加盟1</title>
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
        <?php
        if ($type == 'channel') {
            ?>
            <span class="selected"><a href="/jxs">经销商网点</a></span>
            <em></em>
            <span class="selected bluetom">渠道加盟</span>
            <?php
        }
        ?>

        <?php
        if ($type == 'connection') {
            ?>
            <span class="selected bluetom">我要联系</span>
            <?php
        }
        ?>

        <?php
        if ($type == 'consult') {
            ?>
            <span class="selected bluetom">服务咨询</span>
            <em></em>
            <?php
        }
        ?>


    </div>
</div>


<div class="mobile">
    <div class="kunonbox">
        <div class="krnon3">
            提交完成
        </div>
        <div class="krnon4">
            您已成功提交信息<br>我们会在5个工作日内给您回复
        </div>
        <div class="krnon2">
            <a href="/" class="confirm">确认</a>
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

</body>
</html>
