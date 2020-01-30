<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 17.12.2019
 * Time: 23:23
 */

namespace WebService\Controllers\BaseController;


use Business\Concrete\Manager\UserManager;
use Core\Language\Lang;
use Firebase\JWT\JWT;
use \Exception;

class Init
{

    public function __construct()
    {
        $lang       = locale(get_post('lang'));
        $this->user_model = new UserManager();

        date_default_timezone_set('Europe/Istanbul');
        try {

            $secret_key = require ROOT_DIR.'system/config/config.php';
            $token      = JWT::decode(getBearerToken(), base64_decode($secret_key['jwt']), ['HS256']);
            $this->user = $this->user_model->Get($token->data->user_id);

            if ( empty($this->user["data"]) ) {
                throw new Exception();
            }

            $this->user=$this->user["data"];

        } catch ( Exception $e ) {
            jsonresponse(['success' => 1000, 'data' => [], 'message' => Lang::get('user.not_found', $lang)]);
        }
    }
}