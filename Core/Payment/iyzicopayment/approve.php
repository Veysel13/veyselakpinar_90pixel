<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once('config.php');

/*# create request class
$request = new \Iyzipay\Request\CreateApprovalRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("123456789");
$request->setPaymentTransactionId("1");

# make request
$approval = \Iyzipay\Model\Approval::create($request, Config::options());

# print result
print_r($approval);*/

$request = new \Iyzipay\Request\RetrieveInstallmentInfoRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId($conversation_id);
$request->setBinNumber($bin_number);
$request->setPrice($price);

$installmentInfo = \Iyzipay\Model\InstallmentInfo::retrieve($request, Config::options());

print_r($installmentInfo);