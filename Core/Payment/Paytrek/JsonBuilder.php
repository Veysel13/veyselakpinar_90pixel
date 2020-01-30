<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 23.02.2019
 * Time: 00:42
 */

class JsonBuilder
{

    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }

    public static function create()
    {
        return new JsonBuilder([]);
    }

    public function add()
    {

        $num   = func_num_args();
        $array = func_get_args();
       
        if ( $num == 1 ) {
            $this->addWithNonIndex($array[0]);
        } elseif ( $num == 2 ) {
            $this->addWithIndex($array[0], $array[1]);
        }

        return $this;
    }

    public function addWithIndex($key, $value)
    {
        if ( $value instanceof JsonConvertible ) {
            $this->json[$key] = $value->getJsonObject();
        } else {
            $this->json[$key] = $value;
        }
    }

    public function addWithNonIndex($value)
    {
        if ( $value instanceof JsonConvertible ) {
            $this->json = array_merge($this->json, $value->getJsonObject());
        }
    }

    public function addArray($key, $array = null)
    {
        if ( isset($array) ) {
            foreach ($array as $index => $value) {
                if ( $value instanceof JsonConvertible ) {
                    $this->json[$key][$index] = $value->getJsonObject();
                } else {
                    $this->json[$key][$index] = $value;
                }
            }
        }

        return $this;
    }

    public function getObject()
    {
        return $this->json;
    }

    public static function jsonEncode($json)
    {
        return json_encode($json);
    }

    public static function jsonDecode($json)
    {
        return json_decode($json);
    }

}