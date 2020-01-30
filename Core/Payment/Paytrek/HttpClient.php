<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 23.02.2019
 * Time: 15:08
 */


require_once SYSURL . 'payment/Paytrek/Curl.php';

class HttpClient extends Curl
{

    public static function init()
    {
        return new HttpClient();
    }

    protected static function getHttpHeaders(Options $options)
    {

        $header = array(
            "Content-type: application/json",
        );

        array_push($header, "Authorization: Basic " . self::prepareAuthorizationString($options));

        return $header;

    }

    protected static function prepareAuthorizationString(Options $options)
    {
        return base64_encode($options->getApiKey() . ':' . $options->getSecretKey());
    }

}