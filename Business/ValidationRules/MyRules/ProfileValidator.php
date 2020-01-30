<?php
namespace BusinessLayer\ValidationRules\MyRules;

use BusinessLayer\Functions\Validation\Validator;
use System\Exceptions\ResponseException;
use System\Libraries\Language\Lang;
class ProfileValidator
{

    private $validator;


    public function __construct()
    {
        $this->validator     = new Validator();

    }
    public function validateForProfilAdd($model,$lang)
    {

        $this->validator->set_data([
            'user_id'  => $model["user_id"],
            'profil_name'  => $model["profil_name"],
            'description'  => $model["description"],
            'category_id'  => $model["category_id"]
        ], true);


        $this->validator->set_rules([
            'user_id'  => Lang::get('profil.user_id', $lang).'|required',
            'profil_name'  => Lang::get('profil.profile_name', $lang).'|required',
            'description'  => Lang::get('profil.description', $lang).'|required',
            'category_id'  => Lang::get('profil.category', $lang).'|required',
        ]);

        if($this->validator->is_valid() !== true) {
            $messages ="";
            foreach($this->validator->errors as $error) {
                if ($error) {
                    $messages= $error;
                }
        }
            throw new ResponseException($messages, 0);
        }

       return true;

    }
}