<?php
/**
 * Created by PhpStorm.
 * User: bmnur
 * Date: 12.10.2017
 * Time: 21:34
 */

defined('DIRECT') OR exit('No direct script access allowed');


class Mail
{
	
	// Mail Config
	private $config;
	
	function __construct($config = array())
	{

		
		if (empty($config)){
            $this->config = array(
                "server"=>"mail.bulbulyap.com",
                "username"=>"noreply@bulbulyap.com",
                "password"=>"VeyseL4816",
                "charset"=>"utf-8",
                "from"=>"noreply@bulbulyap.com",
                "fromname"=>"Bul Bul Yap"
            );
        }else{
		    $this->config = $config;
        }

	}

	public function MailSend($to,$subject,$content,$namesurname){
        require_once SYSDIR . "libraries/Mail/mail_view.php";
        $mail_content = mailContent($subject, $content, $namesurname);

        require_once SYSDIR . "libraries/Mail/class.phpmailer.php";
        require_once SYSDIR . "libraries/Mail/class.smtp.php";
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = $this->config["charset"];
        $mail->Host = $this->config["server"];
        $mail->Username =$this->config["username"];
        $mail->Password =$this->config["password"];
        $mail->From =$this->config["from"];
        $mail->Fromname =$this->config["fromname"];
        $mail->isHTML(true);
        if (is_array($to)){
            foreach ($to as $item){
                $mail->AddAddress($item);
            }
        }else{
            $mail->AddAddress($to);
        }

        $mail->Subject = $subject;
        $mail->Body = $mail_content;

        if(!$mail->Send())
        {
            return false;
        }
        return true;
    }


	
}





