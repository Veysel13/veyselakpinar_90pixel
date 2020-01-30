<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 5.03.2019
 * Time: 16:59
 */

class PaymentError
{

    private $error_code;
    private $error_message;
    private $customer_error_message;

    public function setErrorCode($error_code)
    {
        $this->error_code = $error_code;
    }

    public function getErrorCode()
    {
        return $this->error_code;
    }

    public function setErrorMessage($error_message)
    {
        $this->error_message = $error_message;
    }

    public function getErrorMessage()
    {
        return $this->error_message;
    }

    public function setCustomerErrorMessage($customer_error_message)
    {
        $this->customer_error_message = $customer_error_message;
    }

    public function getCustomerErrorMessage()
    {
        return $this->customer_error_message;
    }

}