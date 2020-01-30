<?php

class Country 
{

    private $country_codes = [
        215 => 'TR'
    ];

	public static function create()
    {
        return new Country();
    }

    public function getCode($code)
    {
        return $this->country_codes[$code];
    }

}