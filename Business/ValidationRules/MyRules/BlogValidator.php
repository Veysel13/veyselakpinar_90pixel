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
class BlogValidator
{
    private $validator;


    public function __construct()
    {
        $this->validator     = new Validator();

    }


    public function validateForBlog($model,$lang="en")
    {
        $this->validator->set_data([
            'name'  => $model["name"],
            'description'  => $model["description"]
        ], true);

        $this->validator->set_rules([
            'name'  => Lang::get('blog.name', $lang).'|required',
            'description' => Lang::get('blog.description', $lang).'|required'
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