<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 23.01.2020
 * Time: 21:45
 */

namespace Core\DataAccess\MySql;


class Config
{
    public function settings(){

        if ($_SERVER["HTTP_HOST"]=="mvcframework.local:81"){
            return array(
                "driver"=>"mysql",//database driver
                "host"=>"localhost",//database host
                "dbname"=>"90pixel", //database name
                "user"=>"root", //database user
                "password"=>"" //database password
            );
        }else{
            return array(
                "driver"=>"mysql",//database driver
                "host"=>"localhost",//database host
                "dbname"=>"u9137502_bulbulyap", //database name
                "user"=>"u9137502_veysel_akpinar", //database user
                "password"=>"CKvk24W9DOto56Y" //database password
            );
        }

    }
}