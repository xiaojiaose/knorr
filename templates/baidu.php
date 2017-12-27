<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>联系地址</title>
    <style type="text/css">
        body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap {height: 100%;width:100%;overflow: hidden;}
        dl,dt,dd,ul,li{
            margin:0;
            padding:0;
            list-style:none;
        }
        dt{
            font-size:14px;
            font-family:"微软雅黑";
            font-weight:bold;
            border-bottom:1px dotted #000;
            padding:5px 0 5px 5px;
            margin:5px 0;
        }
        dd{
            padding:5px 0 0 5px;
        }
        li{
            line-height:28px;
        }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6E96nnaKhPGuovefOn3ewBLSVu7z25VI"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
</head>

<body>
<?
    $distributors = $db->select("select * from distributors WHERE id = {$_GET['id']} limit 1");
    $distributor = $distributors[0];
?>
<div id="allmap"></div>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map('allmap');
    var poi = new BMap.Point("<? echo $distributor['x_zhou'] ?>","<? echo $distributor['y_zhou'] ?>");
    map.centerAndZoom(poi, 16);
    map.enableScrollWheelZoom();

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
        '地址：<? echo $distributor["address"] ?><br/>电话：<? echo $distributor["contact_number"] ?><br/>' +
        '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
        title  : "<? echo $distributor['name'] ?>",      //标题
        width  : 290,             //宽度
        height : 105,              //高度
        panel  : "panel",         //检索结果面板
        enableAutoPan : true,     //自动平移
        searchTypes   :[
            BMAPLIB_TAB_TO_HERE,  //到这里去
            BMAPLIB_TAB_SEARCH,   //周边检索
            BMAPLIB_TAB_FROM_HERE //从这里出发
        ]
    });
    var marker = new BMap.Marker(poi); //创建marker对象
    searchInfoWindow.open(marker);
    marker.addEventListener("click", function(e){
        searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
</script>
</body>
</html>
