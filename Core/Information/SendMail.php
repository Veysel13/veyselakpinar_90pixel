<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 30.01.2020
 * Time: 13:58
 */

namespace Core\Information;


class SendMail implements Information
{


    public function Send($mail){
        require_once SYSDIR . "libraries/Mail/mail_content.php";

        $content = mail_content("bilgilendirme", array());

        gotomail($mail, "90pixel - Veri Transferi", $content, "Yönetici");
    }

}