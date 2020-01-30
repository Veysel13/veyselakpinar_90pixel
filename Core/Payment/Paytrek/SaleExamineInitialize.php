<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 5.03.2019
 * Time: 15:12
 */

require_once SYSURL . 'payment/Paytrek/Options.php';
require_once SYSURL . 'payment/Paytrek/Curl.php';
require_once SYSURL . 'payment/Paytrek/HttpClient.php';
require_once SYSURL . 'payment/Paytrek/ThreedInitializeMapper.php';
require_once SYSURL . 'payment/Paytrek/PaymentResource.php';
require_once SYSURL . 'payment/Paytrek/CreateSaleExamine.php';

class SaleExamineInitialize extends PaymentResource
{

    public static function create(CreateSaleExamine $sale_examine, Options $options)
    {
        $result = parent::init()->get($options->getUrl() . 'api/v2/sale/' . $sale_examine->getSaleToken(). '/', parent::getHttpHeaders($options));

        return ThreedInitializeMapper::create($result)->jsonDecode()->mapPaymentResource(new SaleExamineInitialize());
    }

}