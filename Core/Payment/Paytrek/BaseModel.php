<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 23.02.2019
 * Time: 00:36
 */

require_once SYSURL . 'payment/Paytrek/JsonConvertible.php';
require_once SYSURL . 'payment/Paytrek/JsonBuilder.php';

abstract class BaseModel implements JsonConvertible
{
    public function toJsonString()
    {
        return JsonBuilder::jsonEncode($this->getJsonObject());
    }
}