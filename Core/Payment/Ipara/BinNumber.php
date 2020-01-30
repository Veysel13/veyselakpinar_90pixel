<?php
namespace System\Payment\Ipara;
defined('DIRECT') OR exit('No direct script access allowed');
class BinNumber extends  IparaBase
{
    public $binNumber;

    public static function execute(BinNumber $request, IparaSettings $settings)
    {
        $settings->transactionDate = IparaHelper::GetTransactionDateString();
        $settings->HashString = $settings->PrivateKey . $request->binNumber . $settings->transactionDate;
        //return restHttpCaller::post($settings->BaseUrl . "rest/payment/bin/lookup", IparaHelper::GetHttpHeaders($settings, "application/json"), $request->toJsonString());

        return RestHttpCaller::post("https://api.ipara.com/" . "rest/payment/bin/lookup", IparaHelper::GetHttpHeaders($settings, "application/json"), $request->toJsonString());
    }

    public function toJsonString()
    {
        return json_encode(array("binNumber"=>$this->binNumber));
    }
}