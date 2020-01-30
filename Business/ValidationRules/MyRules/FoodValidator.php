<?php
namespace BusinessLayer\ValidationRules\MyRules;

use BusinessLayer\Functions\Validation\Validator;
use System\Exceptions\ResponseException;
use System\Libraries\Language\Lang;
class FoodValidator
{

    private $validator;

    public function __construct()
    {
        $this->validator     = new Validator();

    }
    public function validateForFood($model,$lang)
    {
        $this->validator->set_data([
            'name'  => $model["name"],
            'calorie'  => $model["calorie"]
        ], true);

        $this->validator->set_rules([
            'name'     => Lang::get('food.name', $lang).'|required',
            'calorie'  => Lang::get('food.calorie', $lang).'|required'
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


    }
}