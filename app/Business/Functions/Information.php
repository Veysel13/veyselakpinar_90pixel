<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 23:35
 */

namespace App\Business\Functions;

use App\Mail\SendMail;

class Information
{

    public function sendmail(){

        $details=array(
            "title"=>"Başlık : Bilgilendirme",
            "body"=>"Email testi için",
        );

       \Mail::to("veyselakpinar13@gmail.com")->send(new SendMail($details));
    }
}
