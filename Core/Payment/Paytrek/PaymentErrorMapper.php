<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 5.03.2019
 * Time: 16:58
 */

require_once SYSURL . 'payment/Paytrek/PaymentError.php';

class PaymentErrorMapper
{

    public static function create()
    {
        return new PaymentErrorMapper();
    }

    public function mapPaymentError($json_object)
    {
        $payment_error = new PaymentError();

        foreach ( $json_object as $key => $value ) {

            if ( isset($value->paytrek_error) ) {
                $payment_error->setErrorCode($value->paytrek_error->code);
                $payment_error->setErrorMessage($value->paytrek_error->message);
                $payment_error->setCustomerErrorMessage($value->paytrek_error->customer_message);
            }

        }

        return $payment_error;
    }

}