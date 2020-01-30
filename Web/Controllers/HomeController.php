<?php

namespace Web\Controllers;

use Business\Concrete\Manager\UserManager;
use Core\Exceptions\ResponseException;
use System\General\Session;
use Web\Controllers\BaseController\MainController;

class HomeController extends MainController
{


    private $userService;
    public function __construct()
    {
        parent::__construct();

        $this->userService=new UserManager();
    }

    public function Index(){
        try {
            //$users=$this->userService->where(array("town"=>470))->GetList();
            $users=$this->userService->GetList();
            $this->View("Index","Home",compact("users"));
        } catch (ResponseException $e) {
            Session::set("error_message", $e->getMessage());
            $this->LoginView("Login", "Auth");
        }
    }

    public function Add(){
        try {
            $model=array(
                "username"=>"deneme",
                "password"=>"123456",
            );
            $result=$this->userService->Add($model);
        } catch (ResponseException $e) {
            Session::set("error_message", $e->getMessage());
            $this->LoginView("Login", "Auth");
        }
    }

    public function Update(){
        try {
            $model=array(
                "id"=>20,
                "username"=>"wewewewewe",
                "password"=>"43434343434343",
            );
            $result=$this->userService->Update($model);
        } catch (ResponseException $e) {
            Session::set("error_message", $e->getMessage());
            $this->LoginView("Login", "Auth");
        }
    }

    public function Delete(){
        try {
            $model=array(
                "id"=>20,
            );
            $result=$this->userService->Delete($model);
        } catch (ResponseException $e) {
            Session::set("error_message", $e->getMessage());
            $this->LoginView("Login", "Auth");
        }
    }
}
