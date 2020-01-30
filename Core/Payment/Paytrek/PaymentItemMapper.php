<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 28.02.2019
 * Time: 12:42
 */

require_once SYSURL . 'payment/Paytrek/PaymentItem.php';

class PaymentItemMapper
{

    public static function create()
    {
        return new PaymentItemMapper();
    }

    public function mapPaymentItem($paymentItems)
    {

        $payment_items = [];

        foreach ($paymentItems as $key => $value) {

            $payment_item = new PaymentItem();

            if ( isset($value->name) ) {
                $payment_item->setName($value->name);
            }

            if ( isset($value->photo) ) {
                $payment_item->setPhoto($value->photo);
            }

            if ( isset($value->quantity) ) {
                $payment_item->setQuantity($value->quantity);
            }

            if ( isset($value->unit_price) ) {
                $payment_item->setUnitPrice($value->unit_price);
            }

            $payment_items[$key] = $payment_item;

        }

        return $payment_items;

    }

}