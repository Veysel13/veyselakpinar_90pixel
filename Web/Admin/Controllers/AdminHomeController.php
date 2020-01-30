<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 5.01.2020
 * Time: 21:07
 */

namespace Web\Admin\Controllers;


use Web\Admin\Controllers\BaseController\AdminMainControllers;

class AdminHomeController extends AdminMainControllers
{


    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {

        $this->View("Index", "Home");
    }

}