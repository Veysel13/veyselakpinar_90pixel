<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 15:49
 */

require_once SYSURL . 'payment/Paytrek/BaseModel.php';

class PaymentCard extends BaseModel
{

    private $card_number;
    private $expire_month;
    private $expire_year;
    private $cvc;
    private $card_holder_name;

    public function getCardNumber()
    {
        return $this->card_number;
    }

    public function setCardNumber($card_number)
    {
        $this->card_number = $card_number;
    }

    public function getExpireMonth()
    {
        return $this->expire_month;
    }

    public function setExpireMonth($expire_month)
    {
        $this->expire_month = $expire_month;
    }

    public function getExpireYear()
    {
        return $this->expire_year;
    }

    public function setExpireYear($expire_year)
    {
        $this->expire_year = $expire_year;
    }

    public function getCvc()
    {
        return $this->cvc;
    }

    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
    }
    public function getCardHolderName()
    {
        return $this->card_holder_name;
    }

    public function setCardHolderName($card_holder_name)
    {
        $this->card_holder_name = $card_holder_name;
    }

    public function getExpiration()
    {
        return $this->getExpireMonth() . '/' . $this->getExpireYear();
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
                ->add('number', $this->getCardNumber())
                ->add('card_holder_name', $this->getCardHolderName())
                ->add('cvc', $this->getCvc())
                ->add('expiration', $this->getExpiration())
                ->getObject();
    }

}