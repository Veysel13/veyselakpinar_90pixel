<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 27.02.2019
 * Time: 17:24
 */

require_once SYSURL . 'payment/Paytrek/PaymentItemMapper.php';
require_once SYSURL . 'payment/Paytrek/PaymentErrorMapper.php';

class ThreedPaymentResourceMapper
{

    public function mapThreedPayment(PaymentResource $paymentResource, $json_object)
    {
        if ( isset($json_object->currency) ) {
            $paymentResource->setCurrency($json_object->currency);
        }

        if ( isset($json_object->return_url) ) {
            $paymentResource->setReturnUrl($json_object->return_url);
        }

        if ( isset($json_object->forward_url) ) {
            $paymentResource->setForwardUrl($json_object->forward_url);
        }

        if ( isset($json_object->status) ) {
            $paymentResource->setStatus($json_object->status);
        }

        if ( isset($json_object->installment) ) {
            $paymentResource->setInstallment($json_object->installment);
        }

        if ( isset($json_object->sale_token) ) {
            $paymentResource->setSaleToken($json_object->sale_token);
        }

        if( isset($json_object->order_id) ) {
            $paymentResource->setOrderId($json_object->order_id);
        }

        if( isset($json_object->ref_id) ) {
            $paymentResource->setRefId($json_object->ref_id);
        }

        if( isset($json_object->transactions) ) {
            $paymentResource->setTransactions($json_object->transactions);
            $paymentResource->setErrorGroup(PaymentErrorMapper::create()->mapPaymentError($json_object->transactions));
        }

        if ( isset($json_object->callback_url) ) {
            $paymentResource->setCallbackUrl($json_object->callback_url);
        }

        if ( isset($json_object->items) ) {
            $paymentResource->setItems(PaymentItemMapper::create()->mapPaymentItem($json_object->items));
        }

        if ( isset($json_object->amount) ) {
            $paymentResource->setAmount($json_object->amount);
        }

        if ( isset($json_object->billing_country) ) {
            $paymentResource->setBillingCountry($json_object->billing_country);
        }

        if ( isset($json_object->customer_ip_address) ) {
            $paymentResource->setCustomerIpAddress($json_object->customer_ip_address);
        }

        if ( isset($json_object) ) {
            $paymentResource->setResponseObject($json_object);
        }

        return $paymentResource;
    }

}