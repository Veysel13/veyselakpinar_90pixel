<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("XPEdrDQaPneLpOwjZ5IjKjm7A6PUYaIN");
        $options->setSecretKey("tCOXdiWRyGzjWnljuviqoFAiHKT5UhF5");
        $options->setBaseUrl("https://api.iyzipay.com");//
        return $options;
    }
}