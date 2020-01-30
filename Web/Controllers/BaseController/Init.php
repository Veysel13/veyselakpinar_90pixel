<?php
namespace Web\Controllers\BaseController;

use Firebase\JWT\JWT;
use Entity\User;
use System\General\Session;
use Exception;
use System\Libraries\Language\Lang;
class Init extends MainController
{
    protected $lang;
    protected $user;
    protected $user_model;
    public function __construct()
    {
        parent::__construct();
        $this->lang  = locale(get_post('lang'));
        $this->user_model=new User();
        try {
            if(PHP_SESSION_ACTIVE != session_status () ){
                session_start();
            }
            $secret_key = require ROOT_DIR.'system/config/config.php';
            $token= JWT::decode(Session::sessionToken("access_token"), base64_decode($secret_key['jwt']), ['HS256']);
            $this->user = $this->user_model->find($token->data->user_id);

            if (empty($this->user) ) {
                throw new Exception();
            }


            return $this->user;

        } catch ( Exception $e ) {
            return $this->myresponse(['success' => 1000, 'data' => [], 'message' => Lang::get('database.error', $this->lang)]);
        }
    }


    public function my_user(){

        return  $this->user;
    }
    public  function myresponse($data = array())
    {
        return response($data);
    }

    public  function user_id()
    {

        if (!empty($this->user))
        {
            return trim($this->user["id"]);
        }
        return null;
    }

    public function user_name()
    {

        if (!empty($this->user))
        {
            return trim($this->user["username"]);
        }
        return "System";
    }
    public  function user_email()
    {
        if (!empty($this->user))
        {

            return trim($this->user["email"]);
        }
        return null;
    }

    public  function user_image()
    {
        if (!empty($this->user["photo"]))
        {
            return trim($this->user["photo"]);
        }
        return "user.jpg";
    }


    public function IsLogin(){

        if (empty($this->user))
        {
            header("Location:/auth/login");
        }
        return;

    }

}
