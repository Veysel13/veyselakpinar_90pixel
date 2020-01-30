<?php

namespace System\Payment\Ipara;
defined('DIRECT') OR exit('No direct script access allowed');
class IparaProcess
{
    public $setting;
    public function __construct($BaseUrl = "https://ipara.com/3dgate")
    {

        $this->setting = new IparaSettings();
        $this->setting->BaseUrl = $BaseUrl;
    }
    
    public function initialize_threeds($data = array(), $call_back_url = ""){
        $request = new ThreeDPaymentInitRequest();
        $request->OrderId          = $data["order_id"];
        $request->Echo             = $data["echo"];
        $request->Mode             = $this->setting->Mode;
        $request->Version          = $this->setting->Version;
        $request->Amount           = $data["paidPrice"]; // 1 tl * 100 = 100 -> 1 tl, 0.1 tl * 100 = 10 tl seklinde
        $request->CardOwnerName    = $data["cardHolderName"];
        $request->CardNumber       = $data["cardNumber"];
        $request->CardExpireMonth  = $data["expireMonth"];
        $request->CardExpireYear   = $data["expireYear"];
        $request->UserId           = $data["customerid"];
        $request->Cvc              = $data["cvc"];
        $request->Installment      = $data["installment"];
        $request->ThreeD           = "true";
        $request->PurchaserName    = $data["customer_name"];
        $request->PurchaserSurname = $data["customer_surname"];
        $request->PurchaserEmail   = $data["customer_email"];
        $request->SuccessUrl       = $call_back_url;
        $request->FailUrl          = $call_back_url;
        $response = ThreeDPaymentInitRequest::execute($request,$this->setting);
        return $response;
    }

    public function create_threeds_payment($order_data = array()){

        //request
        $paymentResponse = new ThreeDPaymentInitResponse();
        $paymentResponse->OrderId         = $order_data['orderId'];
        $paymentResponse->Result          = $order_data['result'];
        $paymentResponse->Amount          = $order_data['Amount'];
        $paymentResponse->Mode            = $this->setting->Mode;
        $paymentResponse->ErrorCode       = $order_data['errorCode'];
        $paymentResponse->ErrorMessage    = $order_data['errorMessage'];
        $paymentResponse->TransactionDate = $order_data['transactionDate'];
        $paymentResponse->Hash            = $order_data['hash'];

        IparaHelper::Validate3DReturn($paymentResponse, $this->setting);

        if (IparaHelper::Validate3DReturn($paymentResponse, $this->setting)) //3D Dönen Cevap Doğrulaması
        {
            $request = new ThreeDPaymentCompleteRequest();
            $request->OrderId          = $order_data['orderId'];
            $request->Echo             = $order_data["echo"];
            $request->Mode             = $this->setting->Mode;
            $request->Amount           = $order_data["price"]; // 100 tL
            $request->CardOwnerName    = "";
            $request->CardNumber       = "";
            $request->CardExpireMonth  = "";
            $request->CardExpireYear   = "";
            $request->Installment      = "";
            $request->Cvc              = "";
            $request->ThreeD           = "true";
            $request->ThreeDSecureCode = $order_data['threeDSecureCode'];
            #region Sipariş veren bilgileri
            $request->Purchaser = new Purchaser();
            $request->Purchaser->BirthDate      = "";
            $request->Purchaser->GsmPhone       = $order_data["customer_phone"];
            $request->Purchaser->IdentityNumber = "";
            #endregion

            #region Fatura bilgileri

            $request->Purchaser->InvoiceAddress = new PurchaserAddress();
            $request->Purchaser->InvoiceAddress->Name           = $order_data["customer_name"];
            $request->Purchaser->InvoiceAddress->SurName        = $order_data["customer_surname"];
            $request->Purchaser->InvoiceAddress->Address        = $order_data["customer_address"];
            $request->Purchaser->InvoiceAddress->ZipCode        = "";
            $request->Purchaser->InvoiceAddress->CityCode       = "";
            $request->Purchaser->InvoiceAddress->IdentityNumber = "";
            $request->Purchaser->InvoiceAddress->CountryCode    = "TR";
            $request->Purchaser->InvoiceAddress->TaxNumber      = "";
            $request->Purchaser->InvoiceAddress->TaxOffice      = "";
            $request->Purchaser->InvoiceAddress->CompanyName    = $order_data["company_name"];
            $request->Purchaser->InvoiceAddress->PhoneNumber    = $order_data["customer_phone"];
            #endregion


            #region Kargo Adresi bilgileri

            $request->Purchaser->ShippingAddress = new PurchaserAddress();
            $request->Purchaser->ShippingAddress->Name           = $order_data["customer_name"];
            $request->Purchaser->ShippingAddress->SurName        = $order_data["customer_surname"];
            $request->Purchaser->ShippingAddress->Address        = $order_data["customer_address"];
            $request->Purchaser->ShippingAddress->ZipCode        = "";
            $request->Purchaser->ShippingAddress->CityCode       = "";
            $request->Purchaser->ShippingAddress->IdentityNumber = "";
            $request->Purchaser->ShippingAddress->CountryCode    = "TR";
            $request->Purchaser->ShippingAddress->PhoneNumber    = $order_data["customer_phone"];
            #endregion



            #region Ürün bilgileri

            $request->Products =  array();

            for($i = 0; $i < count($order_data["product"]); $i++){

                $p = new IparaProduct();

                $p->Title    = $order_data["product"][$i]["title"];
                $p->Code     = $order_data["product"][$i]["productid"];
                $p->Price    = $order_data["product"][$i]["cost"];
                $p->Quantity = $order_data["product"][$i]["quantity"];
                $request->Products[$i] = $p;

            }
            #endregion
            $response = ThreeDPaymentCompleteRequest::execute($request,$this->setting);
            return $response;

        }

    }

    public function create_user_and_add_card($data = array()) {


    }


    public function create_card($data = array()) {

    }

    public function delete_card($data = array()){

    }

    public function creditCardBankInfo($data = array()){

        $bin = new BinNumber();
        $bin->binNumber = $data["binNumber"];
        $response = BinNumber::execute($bin, $this->setting);
        $response = (array)json_decode($response);
        return $response;
    }


    public function approval($data = array()){

    }

    public function retrievePaymentRequest($data = array()){


    }



}