<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 25.01.2020
 * Time: 16:22
 */

namespace WebService\Controllers\Home;


class ServiceHomeController
{

    public function Index(){

        jsonresponse(response(array("success"=>1,"data"=>array(),"message"=>"")));
    }
}