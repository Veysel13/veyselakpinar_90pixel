<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("a9WbvQCOJZykce9wuXEVoObWJ1tAhMWy");
        $options->setSecretKey("wX7orhFWc6ZgPeuImryK4ZUFaOQ1d5ev");
        $options->setBaseUrl("https://api.iyzipay.com");
        return $options;
    }
}