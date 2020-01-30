<?php
namespace Web\Controllers;


use Business\Concrete\Manager\CategoryManager;
use Core\Exceptions\ResponseException;
use System\General\Session;
use Web\Controllers\BaseController\MainController;

class CategoryController extends MainController
{



    private $categoryService;
    public function __construct()
    {
        parent::__construct();

        $this->categoryService=new CategoryManager();
    }

    public function Index(){
        try {

            $this->View("Index","Category");
        } catch (ResponseException $e) {
            Session::set("error_message", $e->getMessage());
            $this->LoginView("Login", "Auth");
        }
    }

    public function Add(){
        try {

            $model=array(
                "file"=>$_FILES["file"],
            );

            $this->categoryService->FileUpload($model);

           $this->RedirectToAction("/data-transfer?status=ok");
        } catch (ResponseException $e) {
            Session::set("error_message", $e->getMessage());
            $this->RedirectToAction("/data-transfer?status=no");
        }
    }
}