<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 15:10
 */

class Options
{

    private $api_key;
    private $secret_key;
    private $url;

    public function getApiKey()
    {
        return $this->api_key;
    }

    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    public function getSecretKey()
    {
        return $this->secret_key;
    }

    public function setSecretKey($secret_key)
    {
        $this->secret_key = $secret_key;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

}