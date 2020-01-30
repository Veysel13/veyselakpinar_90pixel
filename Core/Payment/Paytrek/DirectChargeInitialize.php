<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 23.02.2019
 * Time: 14:35
 */

require_once SYSURL . 'payment/Paytrek/CreatePaymentRequest.php';
require_once SYSURL . 'payment/Paytrek/Options.php';
require_once SYSURL . 'payment/Paytrek/Curl.php';
require_once SYSURL . 'payment/Paytrek/HttpClient.php';
require_once SYSURL . 'payment/Paytrek/ThreedInitializeMapper.php';
require_once SYSURL . 'payment/Paytrek/PaymentResource.php';

class DirectChargeInitialize extends PaymentResource
{

    public static function create(CreatePaymentRequest $request, Options $options)
    {

        $result = parent::init()->post($options->getUrl() . 'api/v2/direct_charge/', parent::getHttpHeaders($options), $request->toJsonString());
        
        return ThreedInitializeMapper::create($result)->jsonDecode()->mapPaymentResource(new DirectChargeInitialize());
    }

}