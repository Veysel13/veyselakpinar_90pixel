<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 25.01.2020
 * Time: 17:00
 */

namespace Web\User\Controllers;


use Business\Concrete\Manager\AuthManager;
use Core\Exceptions\ResponseException;
use System\General\Session;
use Web\User\Controllers\BaseController\UserMainControllers;

class UserAuthController extends UserMainControllers
{

    private $auth_service;
    public function __construct()
    {
        parent::__construct();
        $this->auth_service=new AuthManager();
    }

    public function Login(){

        if (Session::get("is_login")==1){
            $this->RedirectToAction("/user/home");
        }
        $this->LoginView("Login","Auth");
    }

    public function Post_Login(){

       try{
           $model=array(
               "username"=>get_post("username"),
               "password"=>get_post("password"),
           );

           $result=$this->auth_service->Login($model);
           Session::set($result);
           $this->RedirectToAction("/user/home");
       }catch (ResponseException $e){
           debug($e->getResponse());
           $this->RedirectToAction("/user-giris-yap");

       }
    }
}