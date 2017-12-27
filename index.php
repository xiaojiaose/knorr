<?php
define('IN_HEMA', true);
define('HEMA_ROOT', dirname(__FILE__));
define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
date_default_timezone_set('PRC');
header("Content-type:text/html;charset=utf-8");

require_once HEMA_ROOT . '/include/global.func.php';

foreach (array('_COOKIE', '_POST', '_GET') as $_request) {
    foreach ($$_request as $_key => $_value) {
        $_key{0} != '_' && $$_key = daddslashes($_value);
    }
}

require_once HEMA_ROOT . '/include/db_mysql.class.php';

$datetime = time();
$back_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$request = ($re = strrchr($_SERVER['REQUEST_URI'], '?'))
    ? (str_replace($re, "", $_SERVER['REQUEST_URI']) == '/' ? '/index' : str_replace($re, "", $_SERVER['REQUEST_URI']))
    : ($_SERVER['REQUEST_URI'] == '/'
        ? '/index'
        : $_SERVER['REQUEST_URI']);
$db = new DBPDO();

include_once HEMA_ROOT . '/templates'.$request.'.php';



