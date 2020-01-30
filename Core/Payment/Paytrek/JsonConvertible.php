<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 23.02.2019
 * Time: 00:37
 */

interface JsonConvertible
{
    public function getJsonObject();

    public function toJsonString();
}