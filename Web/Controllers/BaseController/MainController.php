<?php
namespace Web\Controllers\BaseController;


 class MainController
{

     public function __construct()
     {



     }

     public function RedirectToAction($url,$value=false)
     {
         $url=BASEURL.trim($url,'/');
         restore_include_path();
         if ($value != false) {
             extract($value);
             header("Location:$url");
         } else {
             header("Location:$url");
         }
         die;
     }

     public function View($param,$controller,$vars=false)
     {

         restore_include_path();
         if ($vars!=false){
             extract($vars);
         }

         include_once(ROOT_DIR . "Web/Views/Shared/_header.php");
         include_once(ROOT_DIR."Web/Views/$controller/$param.php");
         include_once(ROOT_DIR . "Web/Views/Shared/_footer.php");
         die;
     }

     public function LoginView($param,$controller,$vars=false)
     {
         restore_include_path();
         if ($vars!=false){
             extract($vars);
         }
         include_once(ROOT_DIR."Web/Views/$controller/$param.php");
         die;
     }

    function __call($method,$par){
        echo $method."/".$par." class not found sdas";
    }
}
