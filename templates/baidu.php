<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hello, World</title>
    <style type="text/css">
        html{height:100%}
        body{height:100%;margin:0px;padding:0px}
        #container{height:100%}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6E96nnaKhPGuovefOn3ewBLSVu7z25VI">
    </script>
</head>

<body>
<div id="container"></div>
<script type="text/javascript">
    // 创建地图实例
    var map = new BMap.Map("container");
    // 创建点坐标
    var point = new BMap.Point(<? echo $x; ?>, <? echo $y; ?>);
    // 初始化地图，设置中心点坐标和地图级别
    map.centerAndZoom(point, 15);
    var marker = new BMap.Marker(point);        // 创建标注
    map.addOverlay(marker);                     // 将标注添加到地图中
</script>
</body>
</html>
