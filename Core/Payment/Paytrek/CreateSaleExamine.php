<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 5.03.2019
 * Time: 15:07
 */

class CreateSaleExamine
{

    private $sale_token;

    public function setSaleToken($sale_token)
    {
        $this->sale_token = $sale_token;
    }

    public function getSaleToken()
    {
        return $this->sale_token;
    }

}