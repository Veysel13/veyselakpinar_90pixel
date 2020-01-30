<?php
/**
 * Created by PhpStorm.
 * User: bmnur
 * Date: 12.10.2017
 * Time: 21:34
 */

defined('DIRECT') OR exit('No direct script access allowed');

include_once  SYSDIR."general/SiteUrl.php";
include_once  SYSDIR."helpers/Functions.php";
include_once  SYSDIR."helpers/User_agent.php";

\System\General\Session::init();

include_once  SYSDIR."router/Router.php";

include_once  WEBDIR.'Router/web.php';
include_once  WEBDIR.'User/Router/userweb.php';
include_once  WEBDIR.'Admin/Router/adminweb.php';
include_once  ROOT_DIR.'WebService/Router/serviceweb.php';

include_once  SYSDIR.'router/web.php';

?>