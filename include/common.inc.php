<?php

define('IN_HEMA', TRUE);
define('HEMA_ROOT', substr(dirname(__FILE__), 0, -7));
define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
date_default_timezone_set('PRC');
header("Content-type:text/html;charset=utf-8");
error_reporting(E_ALL);
require_once HEMA_ROOT . './include/global.func.php';

foreach (array('_COOKIE', '_POST', '_GET') as $_request) {
	foreach ($$_request as $_key => $_value) {
		$_key{0} != '_' && $$_key = daddslashes($_value);
	}
}

require_once HEMA_ROOT . './include/config.inc.php';
require_once HEMA_ROOT . './include/db_mysql.class.php';

$datetime = time();

$back_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//连接数据库
$db = new dbstuff;
$db->connect($dbhost, $dbuser, $dbpw, $dbname, $pconnect, true, $dbcharset);
$dbuser = $dbpw = $pconnect = NULL;
$onlineip = $_SERVER['REMOTE_ADDR'];
