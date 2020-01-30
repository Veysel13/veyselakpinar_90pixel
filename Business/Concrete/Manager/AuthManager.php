<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 25.01.2020
 * Time: 17:06
 */

namespace Business\Concrete\Manager;


use Business\Abstracts\IAuthService;
use Business\ManagerBase\Init;
use Business\ValidationRules\MyRules\LoginValidator;
use Core\Exceptions\ResponseException;
use Core\Language\Lang;
use DataAccess\Concrete\MySql\MySqlUserDal;
use System\General\Tokenizer;

class AuthManager extends Init implements IAuthService
{
    private $validator;
    private $user_service;

    public function __construct()
    {
        parent::__construct();
        $this->validator = new LoginValidator();
        $this->user_service = new MySqlUserDal();
    }


    public function Login(array $model)
    {
        $this->validator->validateForLogin($model, $this->lang);

        $user = $this->user_service->where(["username" => "'" . $model["username"] . "'"])->Gets();

        if(empty($user)){
            throw new ResponseException(Lang::get('user.not_found', $this->lang), 0);
        }


        if($user[0]["password"]!=md5($model["password"])){
            throw new ResponseException(Lang::get('user.password_error', $this->lang), 0);
        }

        if($user[0]["is_active"]!=1){
            throw new ResponseException(Lang::get('database.error', $this->lang), 0);
        }

        $token = Tokenizer::createJWT($user[0]);
        $response_data = array(
            "access_token" => $token,
            "is_login" => 1,
            "user_id" => $user[0]["id"]
        );

        return $response_data;

    }

}