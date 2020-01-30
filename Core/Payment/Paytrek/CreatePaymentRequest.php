<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 23:36
 */

require_once SYSURL . 'payment/Paytrek/BaseModel.php';

class CreatePaymentRequest extends BaseModel
{

    private $amount;
    private $secure_option;
    private $pre_auth;
    private $installment;
    private $currency;
    private $buyer;
    private $card_info;
    private $order_id;
    private $billing;
    private $item;
    private $sale_data;
    private $return_url;

    public function getBuyer()
    {
        return $this->buyer;
    }

    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getInstallment()
    {
        return $this->installment;
    }

    public function setInstallment($installment)
    {
        $this->installment = $installment;
    }

    public function getPreAuth()
    {
        return $this->pre_auth;
    }

    public function setPreAuth($pre_auth)
    {
        $this->pre_auth = $pre_auth;
    }

    public function getSecureOption()
    {
        return $this->secure_option;
    }

    public function setSecureOption($secure_option)
    {
        $this->secure_option = $secure_option;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getCardInfo()
    {
        return $this->card_info;
    }

    public function setCardInfo($card_info)
    {
        $this->card_info = $card_info;
    }

    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    public function getBilling()
    {
        return $this->billing;
    }

    public function setBilling($billing)
    {
        $this->billing = $billing;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }

    public function getSaleData()
    {
        return $this->sale_data;
    }

    public function setSaleData(array $sale_data)
    {
        $this->sale_data = $sale_data;
    }

    public function getReturnUrl()
    {
        return $this->return_url;
    }

    public function setReturnUrl($return_url)
    {
        $this->return_url = $return_url;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
                ->add('amount', $this->getAmount())
                ->add('order_id', $this->getOrderId())
                ->add('secure_option', $this->getSecureOption())
                ->add('pre_auth', $this->getPreAuth())
                ->add('installment', $this->getInstallment())
                ->add('currency', $this->getCurrency())
                ->add('return_url', $this->getReturnUrl())
                ->add($this->getCardInfo())
                ->add($this->getBuyer())
                ->addArray('items', $this->getItem())
                ->addArray('sale_data', $this->getSaleData())
                ->getObject();

    }

}