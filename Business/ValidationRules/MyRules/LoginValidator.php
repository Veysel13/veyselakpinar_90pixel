<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 1.06.2019
 * Time: 00:27
 */

namespace Business\ValidationRules\MyRules;




use Business\ValidationRules\Functions\Validation\Helper;
use Business\ValidationRules\Functions\Validation\Validator;
use Core\Exceptions\ResponseException;
use Core\Language\Lang;

class LoginValidator
{
    private $validator;


    public function __construct()
    {
        $this->validator     = new Validator();

    }

    public function validateForLogin($model,$lang)
    {
        $this->validator->set_data([
            'username'  => $model["username"],
            'password' => $model["password"]
        ], true);

        $this->validator->set_rules([
            'username'  => Lang::get('user.username', $lang).'|required',
            'password' => Lang::get('user.password', $lang).'|required'
        ]);

        if($this->validator->is_valid() !== true) {
            $messages ="";
            foreach($this->validator->errors as $error) {
                if ($error) {
                    $messages.= $error.'/';
                }
            }
            $messages=rtrim($messages,'/');

            throw new ResponseException($messages, 0);
        }
        //email kontrolu
    }

    public function emailInputCheck($email,$lang="tr"){
        $check_email=Helper::emailFormatControl($email);
        if ( $check_email===false ) {
            throw new ResponseException(Lang::get('database.email_incorrect', $lang), 0);
        }
    }
}