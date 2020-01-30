<?php
/**
 * Created by PhpStorm.
 * User: burak
 * Date: 22.02.2019
 * Time: 12:04
 */

require_once SYSURL . 'payment/Paytrek/PaymentCard.php';
require_once SYSURL . 'payment/Paytrek/Buyer.php';
require_once SYSURL . 'payment/Paytrek/Currency.php';
require_once SYSURL . 'payment/Paytrek/Item.php';
require_once SYSURL . 'payment/Paytrek/DirectChargeInitialize.php';
require_once SYSURL . 'payment/Paytrek/Config.php';
require_once SYSURL . 'payment/Paytrek/Country.php';
require_once SYSURL . 'payment/Paytrek/Country.php';
require_once SYSURL . 'payment/Paytrek/SaleExamineInitialize.php';

class PaytrekProcess
{

    public function initializeDirectCharge(array $sale_data, array $user, $threed = true)
    {
        $request = new CreatePaymentRequest();
        $request->setCurrency(Currency::TL);
        $request->setAmount($sale_data['amount']);
        $request->setInstallment($sale_data['installment']);
        $request->setPreAuth(false);
        $request->setSecureOption($threed);
        $request->setOrderId($sale_data['order_id']);
        $request->setSaleData($sale_data['sale_data']);
        $request->setReturnUrl($sale_data['return_url']);

        $card = new PaymentCard();
        $card->setCardNumber($sale_data['number']);
        $card->setCvc($sale_data['cvc']);
        $card->setExpireMonth($sale_data['expire_month']);
        $card->setExpireYear($sale_data['expire_year']);
        $card->setCardHolderName($sale_data['card_holder_name']);

        $request->setCardInfo($card);

        $buyer = new Buyer();
        $buyer->setAddress($user['billing_address']);
        $buyer->setCity($user['billing_city']);
        $buyer->setCountry(Country::create()->getCode($user['customer_country']));
        $buyer->setEmail($user['customer_email']);
        $buyer->setIpAddress($user['customer_ip_address']);
        $buyer->setName($user['customer_first_name']);
        $buyer->setLastName($user['customer_last_name']);

        $request->setBuyer($buyer);

        $items = [];

        foreach ($sale_data['items'] as $key => $value) {

            $item  = new Item();

            $item->setName($value['name']);
            $item->setQuantity($value['quantity']);
            $item->setUnitPrice($value['unit_price']);

            $items[$key] = $item;

        }

        $request->setItem($items);

        $direct_initialize = DirectChargeInitialize::create($request, Config::options());

        return $direct_initialize;

    }

    public function saleExamine($sale_token)
    {

        $sale_examine = new CreateSaleExamine();
        $sale_examine->setSaleToken($sale_token);

        return SaleExamineInitialize::create($sale_examine, Config::options());

    }

}