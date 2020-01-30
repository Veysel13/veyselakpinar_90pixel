<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 11.06.2019
 * Time: 14:09
 */

namespace BusinessLayer\ValidationRules\MyRules;

use BusinessLayer\Functions\Validation\Validator;
use System\Exceptions\ResponseException;
use System\Libraries\Language\Lang;
class ServiceAddValidator
{
    private $validator;


    public function __construct()
    {
        $this->validator     = new Validator();

    }


    public function validateForService($model,$lang="en")
    {
        $this->validator->set_data([
            'full_name'  => $model["namesurname"],

            'phone'  => $model["phone"],
            'answer' => $model["answer"],
            'city'   => $model["city"],
            'town'   => $model["town"],
        ], true);

        $this->validator->set_rules([
            'full_name'  => Lang::get('serviceadd.full_name', $lang).'|required',
            'phone' => Lang::get('serviceadd.phone', $lang).'|required',
            'answer' => Lang::get('serviceadd.answer', $lang).'|required',
            'city' => Lang::get('city.city', $lang).'|required',
            'town' => Lang::get('town.town', $lang).'|required',
        ]);

        if($this->validator->is_valid() !== true) {
            $messages ="";
            foreach($this->validator->errors as $error) {
                if ($error) {
                    //$messages.= $error.'/';
                    $messages= $error;
                }
            }
           // $messages=rtrim($messages,'/');

            throw new ResponseException($messages, 0);
        }

    }

}