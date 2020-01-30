<?php
namespace BusinessLayer\ValidationRules\MyRules;

use BusinessLayer\Functions\Validation\Validator;
use System\Exceptions\ResponseException;
use System\Libraries\Language\Lang;
class PaymentValidator
{

    private $validator;


    public function __construct()
    {
        $this->validator     = new Validator();

    }
    public function validateForPayment(array $model,$lang)
    {

        $this->validator->set_data([
            'card_number'  => $model["card_number"],
            'card_holder_name'  => $model["card_holder_name"],
            'year'  => $model["year"],
            'month'  => $model["month"],
            'cvc'  => $model["cvc"],
            'amount'  => $model["amount"]
        ], true);


        $this->validator->set_rules([
            'card_number'  => Lang::get('payment.card_number', $lang).'|required',
            'card_holder_name'  => Lang::get('payment.card_holder_name', $lang).'|required',
            'year'  => Lang::get('payment.year', $lang).'|required',
            'month'  => Lang::get('payment.month', $lang).'|required',
            'cvc'  => Lang::get('payment.cvc', $lang).'|required',
            'amount'  => Lang::get('payment.amount', $lang).'|required'
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