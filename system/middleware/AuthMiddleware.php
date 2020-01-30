<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 5.07.2019
 * Time: 22:59
 */
namespace System\Middleware;

use Firebase\JWT\JWT;
use Entity\User;
use System\General\Session;
class AuthMiddleware
{
    private $user;
    protected $user_model;
    public function __construct()
    {
        $this->user_model=new User();
    }

    public function handle()
    {
        $lang = locale(get_post('lang'));
        if(PHP_SESSION_ACTIVE != session_status () ){
            session_start();
        }
        $secret_key = require ROOT_DIR.'system/config/config.php';
        if(Session::sessionToken("access_token")==null){
            header("Location:/giris-yap");
        }
        $token= JWT::decode(Session::sessionToken("access_token"), base64_decode($secret_key['jwt']), ['HS256']);
        $this->user = $this->user_model->find($token->data->user_id);

        if($this->user==null){
            header("Location:/giris-yap");
        }
    }

}