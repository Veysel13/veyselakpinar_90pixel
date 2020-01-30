
<?php


//print_r(json_encode($item,JSON_UNESCAPED_UNICODE ));
error_reporting(E_ALL);
ini_set("display_errors", 1);
define("_server_name",$_SERVER['HTTP_HOST']);
date_default_timezone_set('Europe/Istanbul');

require_once 'system/libraries/Config.php';

define('DIRECT', true);
define('BASEURL', $url);
define('HOST', $host);
define('BASE_DIR', '/');
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('SYSDIR',   ROOT_DIR . 'system/');
define('WEBDIR',   ROOT_DIR . 'Web/');
define('ImgUrl',   BASEURL . 'Web/Media/');
define('WebUrl',   BASEURL . 'Web/assets/');
define('UserUrl',  BASEURL . 'Web/User/assets/');
define('AdminUrl', BASEURL . 'Web/Admin/assets/');

define('IMAGE_DIR', realpath(dirname(__FILE__)) .'/Web/Media/');
define('CAT_IMAGE_DIR', realpath(dirname(__FILE__)) .'/Web/Media/Category/');
define('PRODUCT_IMAGE_DIR', realpath(dirname(__FILE__)) .'/Web/Media/Product/');
define('CAMPAIGN_IMAGE_DIR', realpath(dirname(__FILE__)) .'/Web/Media/Campanya/');
try {
    require_once ROOT_DIR.'vendor/autoload.php';
    require_once SYSDIR.'libraries/index.php';
}
catch (Exception $a) {
    echo $a->getMessage();
}


?>