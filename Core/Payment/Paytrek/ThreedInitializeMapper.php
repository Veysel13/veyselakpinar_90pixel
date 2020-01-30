<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 27.02.2019
 * Time: 16:34
 */

require_once SYSURL . 'payment/Paytrek/JsonBuilder.php';
require_once SYSURL . 'payment/Paytrek/ThreedPaymentResourceMapper.php';

class ThreedInitializeMapper extends ThreedPaymentResourceMapper
{

    private $json_object;

    public function __construct($json_object)
    {
        $this->json_object = $json_object;
    }

    public static function create($json_object = null)
    {
        return new ThreedInitializeMapper($json_object);
    }

    public function jsonDecode()
    {
        $this->json_object = JsonBuilder::jsonDecode($this->json_object);

        return $this;
    }

    public function mapPaymentResource(PaymentResource $paymentResource)
    {
        parent::mapThreedPayment($paymentResource, $this->json_object);

        return $paymentResource;
    }

}