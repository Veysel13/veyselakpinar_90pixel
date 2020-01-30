<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 16:05
 */

require_once SYSURL . 'payment/Paytrek/BaseModel.php';

class Item extends BaseModel
{

    private $unit_price;
    private $quantity;
    private $name;
    private $photo;

    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
                ->add('unit_price', $this->getUnitPrice())
                ->add('name', $this->getName())
                ->add('quantity', $this->getQuantity())
                //->add('photo', $this->getPhoto())
                ->getObject();
    }

}