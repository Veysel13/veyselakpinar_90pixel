<?php

namespace System\Payment\Ipara;
defined('DIRECT') OR exit('No direct script access allowed');
class IparaSettings
{
    public function __construct()
    {
        $this->PublicKey="JT4GPOSK6DZFEW0";//"Public Magaza Anahtarı - size mağaza başvurunuz sonucunda gönderilen publik key (açık anahtar) bilgisini kullanınız.",
        $this->PrivateKey="JT4GPOSK6DZFEW047GN0XC3W6";//"Private Magaza Anahtarı  - size mağaza başvurunuz sonucunda gönderilen privaye key (gizli anahtar) bilgisini kullanınız.",
        $this->BaseUrl="https://ipara.com/3dgate"; //iPara web servisleri API url'lerinin başlangıç bilgisidir. Restful web servis isteklerini takip eden kodlar halinde bulacaksınız. // Örneğin "https://api.ipara.com/" + "/rest/payment/auth"  = "https://api.ipara.com/rest/payment/auth"
        $this->Version="1.0";// Kullandığınız iPara API versiyonudur. 
        $this->Mode="T"; // Test -> T, entegrasyon testlerinin sırasında "T" modunu, canlı sisteme entegre olarak ödeme almaya başlamak için ise Prod -> "P" modunu kullanınız.
        $this->HashString="MM";// Kullanacağınız hash bilgisini, bağlanmak istediğiniz web servis bilgisine göre doldurulmalıdır. Bu bilgileri Entegrasyon rehberinin ilgili web servise ait bölümde bulabilirsiniz.
        $this->transactionDate=date("Y-m-d H:i:s");
    }

    public $PublicKey;
    public $PrivateKey;
    public $BaseUrl;
    public $Mode;
    public $Version;
    public $HashString;
    public $transactionDate;
}

?>