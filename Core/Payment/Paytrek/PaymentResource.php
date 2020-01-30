<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 27.02.2019
 * Time: 16:59
 */

require_once SYSURL . 'payment/Paytrek/HttpClient.php';

class PaymentResource extends HttpClient
{

    private $return_url;
    private $currency;
    private $forward_url;
    private $status;
    private $installment;
    private $sale_token;
    private $order_id;
    private $ref_id;
    private $transactions;
    private $callback_url;
    private $items;
    private $amount;
    private $billing_country;
    private $ip_address;
    private $card_type;
    private $response_object;
    private $error_groups;

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setReturnUrl($return_url)
    {
        $this->return_url = $return_url;
    }

    public function getReturnUrl()
    {
        return $this->return_url;
    }

    public function setForwardUrl($forward_url)
    {
        $this->forward_url = $forward_url;
    }

    public function getForwardUrl()
    {
        return $this->forward_url;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setInstallment($installment)
    {
        $this->installment = $installment;
    }

    public function getInstallment()
    {
        return $this->installment;
    }

    public function setSaleToken($sale_token)
    {
        $this->sale_token = $sale_token;
    }

    public function getSaleToken()
    {
        return $this->sale_token;
    }

    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setRefId($ref_id)
    {
        $this->ref_id = $ref_id;
    }

    public function getRefId()
    {
        return $this->ref_id;
    }

    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

    public function getTransaction()
    {
        return $this->transactions;
    }

    public function setCallbackUrl($callback_url)
    {
        $this->callback_url = $callback_url;
    }

    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setBillingCountry($billing_country)
    {
        $this->billing_country = $billing_country;
    }

    public function getBillingCountry()
    {
        return $this->billing_country;
    }

    public function setCustomerIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;
    }

    public function getCustomerIpAddress()
    {
        return $this->ip_address;
    }

    public function setCardType($card_type)
    {
        $this->card_type = $card_type;
    }

    public function getCardType()
    {
        return $this->card_type;
    }

    public function setResponseObject($response_object)
    {
        $this->response_object = $response_object;
    }

    public function getResponseObject()
    {
        return $this->response_object;
    }

    public function setErrorGroup($error_groups)
    {
        $this->error_groups = $error_groups;
    }

    public function getErrorGroup()
    {
        return $this->error_groups;
    }

}