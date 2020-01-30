<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 20:00
 */

namespace App\Business\Functions;


class UploadManager
{

    function ImageAdd($image){
        $refimgyol="";
        if ($image["name"]!=null)
        {
            $uploads_dir="file/";
            $tmp_name=$image["tmp_name"];
            $name=$image["name"];
            $benzersizsayi1=rand(20000,32000);
            $benzersizsayi2=rand(20000,32000);
            $refimgyol=$benzersizsayi1.$benzersizsayi2.$name;
            @move_uploaded_file($tmp_name,"$uploads_dir$benzersizsayi1$benzersizsayi2$name");
        }
        return $refimgyol;

    }
}
