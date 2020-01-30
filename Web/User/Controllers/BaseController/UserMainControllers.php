<?php
namespace Web\User\Controllers\BaseController;


class UserMainControllers
{

    public function __construct()
    {
    }

    public function RedirectToAction($url,$value=false)
    {
         $url=BASEURL.trim($url,'/');

        header("Location:$url");
    }
    public function Direct($url,$value=false)
    {
         $url=trim($url,'/');

        header("Location:$url");
    }

    public function View($param,$controller,$vars=false)
    {
        $view = require_once SYSDIR.'config/view.php';
        $view_name=$controller."/".$param;
        if ( isset($view[$view_name]['css']) ) {
            $vars["css"] = $view[$view_name]['css'];
        }

        if ( isset($view[$view_name]['js']) ) {
            $vars["js"] = $view[$view_name]['js'];
        }

        restore_include_path();
        if ($vars!=false){
            extract($vars);
        }
        include_once(ROOT_DIR . "Web/User/Views/Shared/_header.php");
        include_once ROOT_DIR."Web/User/Views/$controller/$param.php";
        include_once(ROOT_DIR . "Web/User/Views/Shared/_footer.php");
    }

    public function LoginView($param,$controller,$vars=false)
    {
        $view = require_once SYSDIR.'config/view.php';


        $view_name=$controller."/".$param;
        if ( isset($view[$view_name]['css']) ) {
            $vars["css"] = $view[$view_name]['css'];
        }

        if ( isset($view[$view_name]['js']) ) {
            $vars["js"] = $view[$view_name]['js'];
        }

        restore_include_path();
        if ($vars!=false){
            extract($vars);
        }
        include_once(ROOT_DIR."Web/User/Views/$controller/$param.php");
        die;

    }

    function __call($method,$par){
        echo $method."/".$par." class not found sdas";
    }
}
