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
		$buyer->setId($user['user_id']);
		$buyer->setName($user['name']);
		$buyer->setSurname($user['surname']);
		$buyer->setGsmNumber($user['phone']);
		$buyer->setEmail($user['email']);
		$buyer->setIdentityNumber("00000000000");
		$buyer->setLastLoginDate($user['lastLoginData']);
		$buyer->setRegistrationDate($user['activeDate']);
		$buyer->setRegistrationAddress($user['address']);
		$buyer->setIp($user['ip']);
		$buyer->setCity($user['city']);
		$buyer->setCountry($user['country']);
		$buyer->setZipCode("00000");
		$request->setBuyer($buyer);

		$shippingAddress = new \Iyzipay\Model\Address();
		$shippingAddress->setContactName($user['name']." ".$user['surname']);
		$shippingAddress->setCity($user['city']);
		$shippingAddress->setCountry($user['country']);
		$shippingAddress->setAddress($user['address']);
		$shippingAddress->setZipCode("00000");
		$request->setShippingAddress($shippingAddress);

		$billingAddress = new \Iyzipay\Model\Address();
		$billingAddress->setContactName($user['name']." ".$user['surname']);
		$billingAddress->setCity($user['city']);
		$billingAddress->setCountry($user['country']);
		$billingAddress->setAddress($user['address']);
		$billingAddress->setZipCode("00000");
		$request->setBillingAddress($billingAddress);

		$basketItems = array();
		
		for($i = 0; $i < count($data['product']); $i++){ // $data['product'] ->  array(0 => array("setid" => "as", "name" => "as", ...), 1 => array())
			
			$item = new \Iyzipay\Model\BasketItem();
			$item->setId($data['product'][$i]['id']);
			$item->setName($data['product'][$i]['name']);
			$item->setCategory1($data['product'][$i]['category1']);
			$item->setCategory2($data['product'][$i]['category2']);
			$item->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
			$item->setPrice($data['product'][$i]['price']);
			$basketItems[$i] = $item;
			
		}
		
		$request->setBasketItems($basketItems);

		# make request
		$threedsInitialize = \Iyzipay\Model\ThreedsInitialize::create($request, Config::options());

		# print result
		// print_r($request);die;
		
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
		$request->setLocale(\Iyzipay\Model\Locale::TR);
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
		$request->setLocale(\Iyzipay\Model\Locale::TR);
		$request->setConversationId($data['conversationId']);
		$request->setCardUserKey($data['userkey']);

		$cardInformation = new \Iyzipay\Model\CardInformation();
		$cardInformation->setCardAlias($data['cardAlias']);
		$cardInformation->setCardHolderName($data['cardHoldername']);
		$cardInformation->setCardNumber($data['cardNumber']);
		$cardInformation->setExpireMonth($data['expireMonth']);
		$cardInformation->setExpireYear($data['expireYear']);
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
		$request->setPaymentConversationId($data["paymentConversationId"]);

		$payment = \Iyzipay\Model\Payment::retrieve($request, Config::options());
		return $payment;
	}
	
}