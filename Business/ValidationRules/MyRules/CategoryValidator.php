<?php
namespace BusinessLayer\ValidationRules\MyRules;

use BusinessLayer\Functions\Validation\Validator;
use System\Exceptions\ResponseException;
use System\Libraries\Language\Lang;
class CategoryValidator
{

    private $validator;


    public function __construct()
    {
        $this->validator     = new Validator();

    }
    public function validateForCategory($model,$lang)
    {

        $this->validator->set_data([
            'name'  => $model["name"]
        ], true);


        $this->validator->set_rules([
            'name'  => Lang::get('category.name', $lang).'|required'
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