<?php
/**
 * Created by PhpStorm.
 * User: veysel
 * Date: 2.11.2019
 * Time: 23:23
 */

namespace BusinessLayer\Functions\Payment;


class PaytrekCurl
{


    public function get($url){
        return $this->request('GET', $url,null);
    }

    public function post($url,$data){

        return  $this->request('POST', $url,$data);
    }

    public function request($method, $url, $data)
    {
        $secret = "25b1f60402b04e3e854fa96abf0eb110";
        $api_key = "uSm8ri8kb93rYfQgphx/Rv3CwCb+VkfFKZnNYeSGnyw=";
        $url="https://sandbox.paytrek.com/api/v2".$url;

        $headers = array(
            "Authorization: Basic ".base64_encode($api_key . ':' . $secret),
            "Content-Type: application/json"
        );
        $_curl=curl_init();
        curl_setopt($_curl,CURLOPT_URL,$url);
        curl_setopt($_curl,CURLOPT_RETURNTRANSFER,1);
        if ($method=="GET"){
            curl_setopt($_curl,CURLOPT_POST,0);
            curl_setopt($_curl, CURLOPT_CUSTOMREQUEST, "GET");
        }else{
            curl_setopt($_curl,CURLOPT_POST,1);
            curl_setopt($_curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($_curl,CURLOPT_POSTFIELDS,$data);
        }
        curl_setopt($_curl,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($_curl, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($_curl);
        $response_code = curl_getinfo($_curl, CURLINFO_HTTP_CODE);
        curl_close($_curl);


        return $curl_response=array(
            "response"=>$response ? json_decode($response) : $response,
            "response_code"=>$response_code
        );
    }

}