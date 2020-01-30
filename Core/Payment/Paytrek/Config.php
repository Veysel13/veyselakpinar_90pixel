<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 15:08
 */
require_once SYSURL . 'payment/Paytrek/Options.php';

class Config
{

    public static function options()
    {
        $options = new Options();
        $options->setApiKey('GeiVsxxsqYOKxuwsWneaRVP9V54PluEadWzcYSALV+0=');
        $options->setSecretKey('bcbf4597607a4c8d9b67730b64a89363');
        $options->setUrl('https://secure.paytrek.com.tr/');

        return $options;
    }

}