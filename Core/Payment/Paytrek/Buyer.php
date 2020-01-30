<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 15:32
 */

require_once SYSURL . 'payment/Paytrek/BaseModel.php';

class Buyer extends BaseModel
{

    private $customer_first_name;
    private $customer_last_name;
    private $customer_email;
    private $customer_ip_address;
    private $billing_address;
    private $billing_country;
    private $billing_city;


    public function getName()
    {
        return $this->customer_first_name;
    }

    public function setName($name)
    {
        $this->customer_first_name = $name;
    }

    public function getLastName()
    {
        return $this->customer_last_name;
    }

    public function setLastName($last_name)
    {
        $this->customer_last_name = $last_name;
    }

    public function getCountry()
    {
        return $this->billing_country;
    }

    public function setCountry($country)
    {
        $this->billing_country = $country;
    }

    public function getEmail()
    {
        return $this->customer_email;
    }

    public function setEmail($email)
    {
        $this->customer_email = $email;
    }

    public function getIpAddress()
    {
        return $this->customer_ip_address;
    }

    public function setIpAddress($ip)
    {
        $this->customer_ip_address = $ip;
    }

    public function getCity()
    {
        return $this->billing_city;
    }

    public function setCity($city)
    {
        $this->billing_city = $city;
    }

    public function getAddress()
    {
        return $this->billing_address;
    }

    public function setAddress($address)
    {
        $this->billing_address = $address;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
                ->add('billing_address', $this->getAddress())
                ->add('billing_city', $this->getCity())
                ->add('billing_country', $this->getCountry())
                ->add('customer_email', $this->getEmail())
                ->add('customer_first_name', $this->getName())
                ->add('customer_last_name', $this->getLastName())
                ->add('customer_ip_address', $this->getIpAddress())
                ->getObject();
    }

}