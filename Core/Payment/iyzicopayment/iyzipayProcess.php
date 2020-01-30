<?php

require_once('config.php');

class iyzipayProcess{

	/*
	$data = Array(
			"conversationId" => "84870958"
			"basketId" => "67887569312"
			"price" => "5"
			"paidPrice" => "5"
			"product" => Array( "0" => Array ( "id" => "17", "name" => "Web sitesi seo araştırması", "category1" => "114", "category2" => "122", "price" => "5", "subMerchantPrice" => "4.5", "subMerchantKey" => "Kiygpsmm93CeX2c1euO1o5SW5x4=" ) )
		)
	*/
	public function initialize_threeds($data = array(), $user = array(), $odemeTipi = 0, $callBackUrl = "", $card = array(), $setRegisterCard = 0){
		
		# create request class
		$request = new \Iyzipay\Request\CreatePaymentRequest();
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId($data['conversationId']);
		$request->setPrice($data['price']);
		$request->setPaidPrice($data['paidPrice']);
		$request->setCurrency(\Iyzipay\Model\Currency::TL);
		$request->setInstallment(1);
		$request->setBasketId($data['basketId']);
		$request->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
		$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
		$request->setCallbackUrl($callBackUrl);

		$paymentCard = new \Iyzipay\Model\PaymentCard();

		if($odemeTipi == 0){
			$paymentCard->setCardHolderName($card['cardHolderName']);
			$paymentCard->setCardNumber($card['cardNumber']);
			$paymentCard->setExpireMonth($card['expireMonth']);
			$paymentCard->setExpireYear($card['expireYear']);
			$paymentCard->setCvc($card['cvc']);
			$paymentCard->setRegisterCard($setRegisterCard);
		}else{
			$paymentCard->setCardUserKey($user["cardUserKey"]);
			$paymentCard->setCardToken($user["cardToken"]);
		}
		$request->setPaymentCard($paymentCard);

		$buyer = new \Iyzipay\Model\Buyer();
		$buyer->setId($user['id']);
		$buyer->setName($user['namesurname']);
		$buyer->setSurname($user['namesurname']);
		$buyer->setGsmNumber($user['phone']);
		$buyer->setEmail($user['email']);
		$buyer->setIdentityNumber("00000000000");
		$buyer->setLastLoginDate($user['updated_at']);
		$buyer->setRegistrationDate($user['created_at']);
		$buyer->setRegistrationAddress($user['address']);
		$buyer->setIp($user['ip']);
		$buyer->setCity($user['city']);
		$buyer->setCountry($user['country']);
		$buyer->setZipCode("00000");
		$request->setBuyer($buyer);

		$shippingAddress = new \Iyzipay\Model\Address();
		$shippingAddress->setContactName($user['namesurname']);
		$shippingAddress->setCity($user['city_name']);
		$shippingAddress->setCountry($user['contry_name']);
		$shippingAddress->setAddress($user['address']);
		$shippingAddress->setZipCode("00000");
		$request->setShippingAddress($shippingAddress);

		$billingAddress = new \Iyzipay\Model\Address();
		$billingAddress->setContactName($user['namesurname']);
		$billingAddress->setCity($user['city_name']);
		$billingAddress->setCountry($user['contry_name']);
		$billingAddress->setAddress($user['address']);
		$billingAddress->setZipCode("00000");
		$request->setBillingAddress($billingAddress);

		$basketItems = array();
		
		for($i = 0; $i < count($data['product']); $i++){ // $data['product'] ->  array(0 => array("setid" => "as", "name" => "as", ...), 1 => array())
			
			$item = new \Iyzipay\Model\BasketItem();
			$item->setId($data['product'][$i]['id']);
			$item->setName($data['product'][$i]['name']);
			$item->setCategory1($data['product'][$i]['sub_category_id']);
			$item->setCategory2($data['product'][$i]['sub_category_id']);
			$item->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
			$item->setPrice($data['product'][$i]['discounted_price']*$data['product'][$i]['quantity']);
			$item->setSubMerchantPrice($data['product'][$i]['subMerchantPrice']); //firmaya gidecek kısmı fırsat tutarının %75 i 0,75
			$item->setSubMerchantKey($data['product'][$i]['subMerchantKey']); // firmanın iyzico daki kobi keyi
			$basketItems[$i] = $item;
		}
		
		$request->setBasketItems($basketItems);

		# make request
		$threedsInitialize = \Iyzipay\Model\ThreedsInitialize::create($request, Config::options());

		# print result
		// print_r($threedsInitialize);
		
		return $threedsInitialize;
	}
	
	public function create_threeds_payment($data = array()){
		# create request class
		$request = new \Iyzipay\Request\CreateThreedsPaymentRequest();
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId($data['conversationId']);
		$request->setPaymentId($data['paymentId']);
		// $request->setConversationData($data['conversationId']);

		# make request
		$threedsPayment = \Iyzipay\Model\ThreedsPayment::create($request, Config::options());

		# print result
		// print_r($threedsPayment);
		return $threedsPayment;
	}
	
	public function create_user_and_add_card($data = array()) {
		# create request class
		$request = new \Iyzipay\Request\CreateCardRequest();

		if ($data["locale"]=="tr"){
            $request->setLocale(\Iyzipay\Model\Locale::TR);
        }else{
            $request->setLocale(\Iyzipay\Model\Locale::EN);
        }

		$request->setConversationId($data['conversationId']);
		$request->setEmail($data['email']);
		// $request->setExternalId("external id");

		$cardInformation = new \Iyzipay\Model\CardInformation();
		$cardInformation->setCardAlias($data['cardAlias']);
		$cardInformation->setCardHolderName($data['cardHoldername']);
		$cardInformation->setCardNumber($data['cardNumber']);
		$cardInformation->setExpireMonth($data['expireMonth']);
		$cardInformation->setExpireYear($data['expireYear']);
		$request->setCard($cardInformation);

		# make request
		$card = \Iyzipay\Model\Card::create($request, Config::options());

		# print result
		return $card;
	}

	public function create_card($data = array()) {
		# create request class
		$request = new \Iyzipay\Request\CreateCardRequest();
        if ($data["locale"]=="tr"){
            $request->setLocale(\Iyzipay\Model\Locale::TR);
        }else{
            $request->setLocale(\Iyzipay\Model\Locale::EN);
        }
		$request->setConversationId($data['conversationId']);
		$request->setCardUserKey($data['userkey']);

		$cardInformation = new \Iyzipay\Model\CardInformation();
		$cardInformation->setCardAlias($data['cardAlias']);
		$cardInformation->setCardHolderName($data['cardHoldername']);
		$cardInformation->setCardNumber($data['cardNumber']);
		$cardInformation->setExpireMonth($data['expireMonth']);
		$cardInformation->setExpireYear($data['expireYear']);
        $request->setEmail($data['email']);
		$request->setCard($cardInformation);

		# make request
		$card = \Iyzipay\Model\Card::create($request, Config::options());

		return $card;
	}
	
	public function delete_card($data = array()){
		# create request class
		$request = new \Iyzipay\Request\DeleteCardRequest();
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId($data["conversationId"]);
		$request->setCardToken($data["cardtoken"]);
		$request->setCardUserKey($data["userkey"]);

		# make request
		$card = \Iyzipay\Model\Card::delete($request, Config::options());
        return $card;
		# print_r($card);
	}

	public function creditCardBankInfo($data = array()){
        # create request class
        $request = new \Iyzipay\Request\RetrieveBinNumberRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($data["conversationId"]);
        $request->setBinNumber($data["binNumber"]);

        # make request
        $result = \Iyzipay\Model\BinNumber::retrieve($request, Config::options());

        # print result
        //print_r($result);
        return $result;
    }

	public function creditCardInstallmentInfo($data = array()){


	    $request = new \Iyzipay\Request\RetrieveInstallmentInfoRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($data["conversationId"]);
        $request->setBinNumber($data["binNumber"]);
        $request->setPrice($data["price"]);


        $installmentInfo = \Iyzipay\Model\InstallmentInfo::retrieve($request, Config::options());

        # print result
        //print_r($result);
        return $installmentInfo;
    }

	public function approval($data = array()){
		
		# create request class
		$request = new \Iyzipay\Request\CreateApprovalRequest();
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId($data["conversationId"]);
		$request->setPaymentTransactionId($data["transactionId"]);

		# make request
		$approval = \Iyzipay\Model\Approval::create($request, Config::options());

		return $approval;
	}
	
	public function retrievePaymentRequest($data = array()){

		$request = new \Iyzipay\Request\RetrievePaymentRequest();
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId($data["conversationId"]);
		$request->setPaymentId($data["paymentId"]);
		//$request->setPaymentConversationId($data["paymentConversationId"]);

		$payment = \Iyzipay\Model\Payment::retrieve($request, Config::options());
		return $payment;
	}

    public function create_private_sub_merchant($data = array(),$phone =""){
        $ConversationId	= rand(0001,9999);
        # create request class
        $request = new \Iyzipay\Request\CreateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($ConversationId);
        $request->setSubMerchantExternalId($data['firma_id']);
        $request->setSubMerchantType(\Iyzipay\Model\SubMerchantType::PRIVATE_COMPANY);
        $request->setAddress($data['address']);
        $request->setTaxOffice($data['vergidairesi']);
        $request->setLegalCompanyTitle($data['hesapsahibi_adi'].' '.$data['hesapsahibi_soyadi']);
        $request->setEmail($data['email']);
        $request->setGsmNumber($phone);
        $request->setName($data['bussiness_name']);
        $request->setIban($data['iban']);
        $request->setIdentityNumber($data['hesapsahibi_tc']);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);

        # make request
        $subMerchant = \Iyzipay\Model\SubMerchant::create($request, Config::options());

        if($subMerchant->getstatus() == 'success'){
            return array("success" => 1, "subkey" => $subMerchant->getsubMerchantKey(), "message" => "");
        }else{
            return array("success" => 0, "subkey" => 0, "message" => $subMerchant->geterrorMessage());
        }
    }

    public function create_limited_company_sub_merchant($data = array(),$phone =""){
        $ConversationId	= rand(0001,9999);
        # create request class
        $request = new \Iyzipay\Request\CreateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($ConversationId);
        $request->setSubMerchantExternalId($data['firma_id']);
        $request->setSubMerchantType(\Iyzipay\Model\SubMerchantType::LIMITED_OR_JOINT_STOCK_COMPANY);
        $request->setAddress($data['address']);
        $request->setTaxOffice($data['vergidairesi']);
        $request->setTaxNumber($data['vergino']);
        $request->setLegalCompanyTitle($data['firmaunvani']);
        $request->setEmail($data['email']);
        $request->setGsmNumber($phone);
        $request->setName($data['bussiness_name']);
        $request->setIban($data['iban']);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);

        # make request
        $subMerchant = \Iyzipay\Model\SubMerchant::create($request, Config::options());

        // print $subMerchant;
        // echo $data['email'];die();
        // print_r($subMerchant);die();

        if($subMerchant->getstatus() == 'success'){
            return array("success" => 1, "subkey" => $subMerchant->getsubMerchantKey(), "message" => "");
        }else{
            return array("success" => 0, "subkey" => 0, "message" => $subMerchant->geterrorMessage());
        }
    }

    public function update_personal_sub_merchant($data = array(),$phone =""){
        $ConversationId	= rand(0001,9999);
        # create request class
        $request = new \Iyzipay\Request\UpdateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($ConversationId);
        $request->setSubMerchantKey($data['iyzicosubkey']);
        $request->setIban($data['iban']);
        $request->setAddress($data['address']);
        $request->setContactName($data['hesapsahibi_adi']);
        $request->setContactSurname($data['hesapsahibi_soyadi']);
        $request->setEmail($data['email']);
        $request->setGsmNumber($phone);
        $request->setName($data['bussiness_name']);
        $request->setIdentityNumber($data['hesapsahibi_tc']);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);

        # make request
        $subMerchant = \Iyzipay\Model\SubMerchant::update($request, Config::options());

        # print result
        if($subMerchant->getstatus() == 'success'){
            return array("success" => 1, "subkey" => $subMerchant->getsubMerchantKey(), "message" => "");
        }else{
            return array("success" => 0, "subkey" => 0, "message" => $subMerchant->geterrorMessage());
        }
    }

    public function update_private_sub_merchant($data = array(),$phone =""){
        $ConversationId	= rand(0001,9999);
        # create request class
        $request = new \Iyzipay\Request\UpdateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($ConversationId);
        $request->setSubMerchantKey($data['iyzicosubkey']);
        $request->setAddress($data['address']);
        $request->setTaxOffice($data['vergidairesi']);
        $request->setLegalCompanyTitle($data['hesapsahibi_adi'].' '.$data['hesapsahibi_soyadi']);
        $request->setEmail($data['email']);
        $request->setGsmNumber($phone);
        $request->setName($data['bussiness_name']);
        $request->setIban($data['iban']);
        $request->setIdentityNumber($data['hesapsahibi_tc']);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);

        # make request
        $subMerchant = \Iyzipay\Model\SubMerchant::update($request, Config::options());

        # print result
        // print_r($subMerchant);
        if($subMerchant->getstatus() == 'success'){
            return array("success" => 1, "subkey" => $subMerchant->getsubMerchantKey(), "message" => "");
        }else{
            return array("success" => 0, "subkey" => 0, "message" => $subMerchant->geterrorMessage());
        }
    }

    public function update_limited_company_sub_merchant($data = array(),$phone =""){
        $ConversationId	= rand(0001,9999);
        # create request class
        $request = new \Iyzipay\Request\UpdateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($ConversationId);
        $request->setSubMerchantKey($data['iyzicosubkey']);
        $request->setAddress($data['address']);
        $request->setTaxOffice($data['vergidairesi']);
        $request->setTaxNumber($data['vergino']);
        $request->setLegalCompanyTitle($data['firmaunvani']);
        $request->setEmail($data['email']);
        $request->setGsmNumber($phone);
        $request->setName($data['bussiness_name']);
        $request->setIban($data['iban']);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);

        # make request
        $subMerchant = \Iyzipay\Model\SubMerchant::update($request, Config::options());

        # print result
        // print_r($subMerchant);
        if($subMerchant->getstatus() == 'success'){
            return array("success" => 1, "subkey" => $subMerchant->getsubMerchantKey(), "message" => "");
        }else{
            return array("success" => 0, "subkey" => 0, "message" => $subMerchant->geterrorMessage());
        }
    }

    public function retrieve_sub_merchant($data = array()){
        $ConversationId	= rand(0001,9999);
        # create request class
        $request = new \Iyzipay\Request\RetrieveSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId($ConversationId);
        $request->setSubMerchantExternalId($data["id"]);

        # make request
        $subMerchant = \Iyzipay\Model\SubMerchant::retrieve($request, Config::options());

        return $subMerchant->getsubMerchantType();
    }

}