<?php

function _e($deger) {
    echo $deger;
}

function rating($deger) {

    $rating= (int)round($deger);

    $text="";
    if (is_int($rating)){
        for ($i=1;$i<$rating;$i++){
            $text.='<a ><i class="fa fa-star"></i></a>';
        }
    }

    if ($deger<$rating && $deger!=0){
        $text.='<a ><i class="fa fa-star-half-o"></span></a>';
    }

    if ($deger==$rating && $deger!=0){
        $text.='<a ><i class="fa fa-star"></i></a>';
    }



    for ($i=0;$i<10-$rating;$i++){
        $text.='<a ><i class="fa fa-star-o"></i></a>';
    }


    return $text;
}
//recursive fonksıyon alt cocuklarını gezmek için,kategori eklerken kullanıyoruz
if (!function_exists("getChildren")) {
    function getChildren($category, &$html, $level = 1, $id = 0)
    {
        $categorydb = new \BusinessLayer\Concrete\CategoryManager();
        $kategoriler = $categorydb->get_topcategory($category["id"])["data"];

        foreach ($kategoriler as $child) {
            if ($child["id"] == $id) {
                $metin = "selected";
            } else {
                $metin = "";
            }
            $html .= "<option $metin value=" . $child["id"] . ">" . str_repeat("&nbsp;", $level * 4) . $child["name"] . "</option>";
            $level++;
            getChildren($child, $html, $level, $id);
            $level--;
        }
    }
}

//kategorileri yazdırmak için,kategori eklerken kullanıyoruz
if (!function_exists("kategori")) {
    function kategori($id = 0)
    {

        $html = "";

        $categorydb = new \BusinessLayer\Concrete\CategoryManager();
        $kategoriler = $categorydb->topcategory_all()["data"];

        foreach ($kategoriler as $kategori) {
            if ($kategori["id"] == $id) {
                $metin = "selected";
            } else {
                $metin = "";
            }
            $html .= "<option $metin  value=" . $kategori["id"] . ">" . $kategori["name"] . "</option>";
            getChildren($kategori, $html, 1, $id);
        }
        return $html;


    }
}


if(!function_exists('mydate'))
{
    function tarihkarsilastirma($tarih){
        if(strtotime(nowAt()) > strtotime($tarih)){
            return true;
        }else{
            return false;
        }
    }
}

if(!function_exists('mydate'))
{
    function mydate($tarih){

        setlocale(LC_ALL,'turkish'); //başka bir dil içinse burada belirteceksin.
        $tarih= iconv('latin5','utf-8',strftime(' %d %B %Y %A ',strtotime($tarih)));
        return $tarih;
    }
}
if(!function_exists('tarihcevir'))
{
    function tarihcevir($tarih, $birlestirme_ayraci = "-", $ayirma_ayraci = "-", $saat = false, $tarih_saat = true){

        if ($tarih == ""){
            return "-";
        }

        $tarihtam = explode(" ", $tarih);
        $tarih    = explode("$ayirma_ayraci", $tarihtam[0]);

        if ($saat){
            return $tarihtam[1];
        }

        if(isset($tarihtam[1]) && $tarih_saat)
        {
            $saat  = explode(":", $tarihtam[1]);
            $tarih = $tarih[2] . $birlestirme_ayraci . $tarih[1] . $birlestirme_ayraci . $tarih[0] . " " . $saat[0] . ":" . $saat[1];
        }
        else
        {
            $tarih = $tarih[2] . $birlestirme_ayraci . $tarih[1] . $birlestirme_ayraci . $tarih[0];
        }

        return $tarih;
    }
}

if (!function_exists("seo")){
    function seo($str, $options = array())
    {
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        $options = array_merge($defaults, $options);
        $char_map = array(
            // Latin
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
            'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
            'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
            'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
            'ß' => 'ss',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
            'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
            'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
            'ÿ' => 'y',
            // Latin symbols
            '©' => '(c)',
            // Greek
            'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
            'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
            'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
            'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
            'Ϋ' => 'Y',
            'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
            'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
            'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
            'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
            'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
            // Turkish
            'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
            'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
            // Russian
            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
            'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
            'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
            'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
            'Я' => 'Ya',
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
            'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
            'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
            'я' => 'ya',
            // Ukrainian
            'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
            'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
            // Czech
            'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
            'Ž' => 'Z',
            'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
            'ž' => 'z',
            // Polish
            'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
            'Ż' => 'Z',
            'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
            'ż' => 'z',
            // Latvian
            'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
            'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
            'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
            'š' => 's', 'ū' => 'u', 'ž' => 'z'
        );
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }
}

if(!function_exists('Url'))
{
    function Url($url)
    {
        return BASEURL.trim($url,'/');
    }
}

if(!function_exists('Image'))
{
    function Image($path)
    {

        echo BASEURL."Web/Media/". trim($path);
    }
}

if(!function_exists('my_errors'))
{
    function my_errors()
    {
         if (\System\General\Session::get("error_message")!=null){
             $text="<div class='row'><div class='col-md-12'><div class='alert alert-danger'>".\System\General\Session::get("error_message")."</div></div></div>";
           echo $text;
         }

         \System\General\Session::delete("error_message");
    }
}

if(!function_exists('my_info'))
{
    function my_info()
    {
        if (\System\General\Session::get("info_message")!=null){

            $text="<div class='row'><div class='col-md-12'><div class='alert alert-success'>".\System\General\Session::get("info_message")."</div></div></div>";
            echo $text;
        }
        \System\General\Session::delete("info_message");
    }
}

if(!function_exists('info_message'))
{
    function info_message()
    {
        if (\System\General\Session::get("info_message")!=null){
            $text="<div class='row'><div class='col-md-12'><div class='alert alert-success'>".\System\General\Session::get("info_message")."</div></div></div>";
            echo $text;
        }

        \System\General\Session::delete("info_message");
    }
}

if(!function_exists('get_post')) {
    function get_post($post_value = "", $is_empty = false)
    {
        if(!isset($_POST["$post_value"])){
            return false;
        }

        $post   = $_POST["$post_value"];
        $post   = trim($post);             //bastaki ve sondaki boslukları siler
        //$post = htmlspecialchars($post); //Özel karakterleri HTML öğeleri haline getirir
        //$post = htmlentities($post);     //Dönüştürülebilecek tüm karakterleri HTML öğeleri haline getirir
        $post   = strip_tags($post);       //Html etiketlerini temizler
        $post   = addslashes($post);       //Üsten kesme işaretini (') geçersiz yapar
        //$post = mysql_real_escape_string($post);

        if($is_empty) {
            if (empty($post)) {
                return false;
            }
        }

        return $post;
    }
}

if(!function_exists('request_all')) {
    function request_all($model)
    {
        if ( !isset($model) ) {
            return false;
        }
        foreach ($model as $key => $value) {
            $model[$key] = addslashes(strip_tags(trim($value)));
        }
        return $model;
    }
}

if( ! function_exists('debug')) {
    function debug($data, $stop = true)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        if($stop) {
            die();
        }
    }
}

if(!function_exists("response")){
    function response($data = array())
    {

       // return json_encode($data);
        return $data;

        /*if($data["success"] == "0"){
            die;
        }*/
    }
}

if(!function_exists("jsonresponse")){
    function jsonresponse($data = array())
    {
      print_r(json_encode($data));
       die;

    }
}

if(!function_exists("response_message")){
    function response_message($code = 0){
        $message = array(
            "100" => "Servis Bulunamadı",
            "101" => "Kullanıcı Bulunamadı.",
        );

        return $message[$code];
    }
}

if (!function_exists('getDistance')) {
    function getDistance($lat1, $lon1, $lat2, $lon2, $unit) {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}

if(!function_exists('generateRandomString'))
{
    function generateRandomString($length = 10, $character_type = "all") {
        if($character_type == "int") {
            $characters = '0123456789';
        }else{
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        $charactersLength = strlen($characters);
        $randomString     = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}

if ( !function_exists('sendOtpSms') ) {
    function sendOtpSms($no, $mesaj) {
        $xml='<?xml version="1.0" encoding="UTF-8"?>
                <mainbody>
                    <header>
                        <usercode>8503041112</usercode>
                        <password>JPQXVFSB </password>
                        <msgheader>LOKALFIRSAT</msgheader>
                    </header>
                    <body>
                        <msg><![CDATA[' . $mesaj . ']]></msg>
                        <no>' . $no .'</no>
                    </body>
                </mainbody>';

        $gelen = XMLPOST('https://api.netgsm.com.tr/sms/send/otp',$xml);

        $gelen = strip_tags($gelen);

        if ( $gelen[0] == 0 || $gelen[0] == '0' ) {
            return true;
        } else {
            $sms = smsGonder($no, $mesaj);
            return $sms;
        }
    }
}

if(!function_exists('days')) {
    function days($data)
    {
        if ( $data == '1' ) {
            return _('Pazartesi');
        } elseif ( $data == '2' ) {
            return _('Salı');
        } elseif ( $data == '3' ) {
            return _('Çarşamba');
        } elseif ( $data == '4' ) {
            return _('Perşembe');
        } elseif ( $data == '5' ) {
            return _('Cuma');
        } elseif ( $data == '6' ) {
            return _('Cumartesi');
        } elseif ( $data == '7' ) {
            return _('Pazar');
        }
    }
}

if(!function_exists('englishDays')) {
    function englishDays($data)
    {
        if ( $data == 'Pazartesi' ) {
            return 'Monday';
        } elseif ( $data == 'Salı' ) {
            return 'Tuesday';
        } elseif ( $data == 'Çarşamba' ) {
            return 'Wednesday';
        } elseif ( $data == 'Perşembe' ) {
            return 'Thursday';
        } elseif ( $data == 'Cuma' ) {
            return 'Friday';
        } elseif ( $data == 'Cumartesi' ) {
            return 'Saturday';
        } elseif ( $data == 'Pazar' ) {
            return 'Sunday';
        }
    }
}

if (!function_exists('nowAt')) {

    function nowAt( $type = 'datetime' )
    {
        if ( $type == 'date' ) {
            return date('Y-m-d');
        } elseif ( $type == 'datetime' ) {
            return date('Y-m-d H:i:s');
        }

    }

}

if (!function_exists('showErrors')) {

    function show_errors()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

}

if (!function_exists('locale')) {

    function locale($lang)
    {
        $check = require_once ROOT_DIR . 'system/config/language.php';
        if (empty($lang) || !in_array($lang, $check)  )
        {
            return 'tr';
        }
        return $lang;
    }

}

if ( !function_exists('calculate_age') ) {

    function calculate_age($birthday)
    {
        $born = new DateTime($birthday);
        $now  = new DateTime(date('Y-m-d'));

        $interval = $now->diff($born);

        return $interval->y;
    }
}

if ( !function_exists('getAuthorizationHeader') ) {
    /**
     * Get header Authorization
     * */
    function getAuthorizationHeader(){
        $headers = null;

        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();

            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            //print_r($requestHeaders);
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }

            if ( isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION']) ) {
                $headers = trim($_SERVER['REDIRECT_HTTP_AUTHORIZATION']);
            }
        }

        return $headers;
    }
}

if ( !function_exists('getBearerToken') ) {
    /**
     * get access token from header
     * */
    function getBearerToken() {
        $headers = getAuthorizationHeader();
        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }
        return null;
    }
}

if(!function_exists('gotomail')) {
    function gotomail($to, $subject = '', $content = '', $namesurname = '')
    {

        require_once SYSDIR . "libraries/Mail/Mail.php";
        $mail = new Mail();
       return $mail->MailSend($to, $subject, $content, $namesurname);
    }
}

if(!function_exists('sendSMTPMail'))
{
    function sendSMTPMail($data = array(), $type = "system", $config = array()){ // $type -> system or user

        require_once SYSDIR . "libraries/Mail/Mail.php";
        $mail = new Mail($config);

        $mail->from($data["from"], $data["from"]);
        $mail->to($data["to"]);
        $mail->subject($data["subject"]);

        if ($type == "system"){
            ob_start();
            include ROOT_DIR . $data['view_file'];
            $output = ob_get_contents();
            ob_end_clean();

            $mail->message($output);
        }else{
            $mail->message($data["content"]);
        }

        if( $mail->send() ){
            debug("gitti");
            return true;
        }else{
            debug("no");
            return false;
        }
    }
}

if(!function_exists('sendMail'))
{
    function sendMail($to, $subject = '', $content = '', $namesurname = '', $type = "lokalisyeri")
    {
        include_once SYSDIR . "libraries/Mail/mail_view.php";
        $mail_content = mailContent($subject, $content, $namesurname, $type);

        $random_hash = md5(date('r', time()));

        $headers     = "MIME-Version: 1.0" . "\r\n";
        $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //$headers    .= "From: Bul Bul Yap<info@bulbulyap.com>\r\nReply-To: info@bulbulyap.com";
        $headers .= "From: info@lokalfirsat.com\r\nReply-To: info@lokalfirsat.com";
        //$headers  .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";

        debug(@mail($to,'=?utf-8?B?'.base64_encode($subject).'?=',$mail_content,$headers));
        if(@mail($to,'=?utf-8?B?'.base64_encode($subject).'?=',$mail_content,$headers)){
            return true;
        }
        return false;
    }
}

if(!function_exists('sentMail'))
{
    function sentMail($alici, $konu = 'lokalfirsat.com', $mesaj = '', $sayfa = '', $namesurname = '', $username = '', $password = '', $dogrulama_kodu = ''){

        include_once SYSDIR . "libraries/Mail/mail_view.php";
        $content = mailContent($mesaj, $namesurname, $username, $password, $dogrulama_kodu);
        $random_hash = md5(date('r', time()));

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@lokalfirsat.com\r\nReply-To: info@lokalfirsat.com";
        //$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\"";

        if(mail($alici,'=?utf-8?B?'.base64_encode($konu).'?=',$content,$headers)){
            return true;
        }

        return false;

    }
}

if(!function_exists('XMLPOST'))
{
    function XMLPOST($PostAddress,$xmlData)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$PostAddress);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
        $result = curl_exec($ch);
        return $result;
    }
}

if(!function_exists('XMLPOSTControl'))
{
    function XMLPOSTControl($PostAddress,$xmlData)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$PostAddress);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
        curl_exec($ch);
    }
}

if(!function_exists('toplu_sms'))
{
    function toplu_sms($phone = '', $message = '', $title = "GLINT"){

        if(empty($phone)  || empty($message)){
            return false;
        }

        $phone_list=array_map(function ($item){
            if (!empty($item)){
                return "<no>".$item."</no>";
            }
        },$phone);


        $phone_list=implode($phone_list );


        $xml='<?xml version="1.0" encoding="UTF-8"?>
     <mainbody>
     <header>
     <company dil="TR">Netgsm</company>        
     <usercode>05845245545</usercode>
     <password>47fdfdfd</password>
     <type>1:n</type>
     <msgheader>BulBulYap</msgheader>
     </header>
     <body>
     <msg>
     <![CDATA['.$message.']]>
     </msg>
      '.$phone_list.'
     </body>
     </mainbody>';

        $gelen = XMLPOST('https://api.netgsm.com.tr/sms/send/xml',$xml);

        $part = explode(" ", $gelen);

        smsControl();

        if ( count($part) == 2 ) {
            return true;
        } else {
            return false;
        }
    }
}

if(!function_exists('sendSMS'))
{
    function sendSMS($phone = '', $message = '', $title = "GLINT"){


        if(empty($phone)  || empty($message)){
            return false;
        }


        $xml='<?xml version="1.0" encoding="UTF-8"?>
 <mainbody>
 <header>
 <company dil="TR">Netgsm</company>        
 <usercode>8503023570</usercode>
 <password>XD9ELXNY</password>
 <type>1:n</type>
 <msgheader>GLINT</msgheader>
 </header>
 <body>
 <msg>
 <![CDATA['.$message.']]>
 </msg>
 <no>'.$phone.'</no>
 </body>
 </mainbody>';

        $gelen = XMLPOST('https://api.netgsm.com.tr/sms/send/xml',$xml);

        $part = explode(" ", $gelen);

        smsControl();

        if ( count($part) == 2 ) {
            return true;
        } else {
            return false;
        }
    }
}

if(!function_exists('smsControl'))
{
    function smsControl(){

        $xml='<?xml version="1.0"?>
<mainbody>
	<header>		
        <usercode>8503023570</usercode>
        <password>XD9ELXNY</password>
	      <stip>2</stip>      
        </header>		
</mainbody>';

        $gelen = XMLPOST('https://api.netgsm.com.tr/balance/list/xml',$xml);

        $part = explode(" ", $gelen);

        if ($part[1]<100){
            $message="Glint sms kredisi bitmek üzere";
            $phone="05322844181";

            $xml='<?xml version="1.0" encoding="UTF-8"?>
                 <mainbody>
                 <header>
                 <company dil="TR">Netgsm</company>        
                 <usercode>8503023570</usercode>
                 <password>XD9ELXNY</password>
                 <type>1:n</type>
                 <msgheader>GLINT</msgheader>
                 </header>
                 <body>
                 <msg>
                 <![CDATA['.$message.']]>
                 </msg>
                 <no>'.$phone.'</no>
                 </body>
                 </mainbody>';

            XMLPOSTControl('https://api.netgsm.com.tr/sms/send/xml',$xml);
        }
    }
}

if(!function_exists('smsInformation'))
{
    function smsInformation(){

        $xml='<?xml version="1.0"?>
<mainbody>
	<header>		
        <usercode>8503023570</usercode>
        <password>XD9ELXNY</password>
	      <stip>2</stip>      
        </header>		
</mainbody>';

        $gelen = XMLPOST('https://api.netgsm.com.tr/balance/list/xml',$xml);

        $part = explode(" ", $gelen);

        if ($part[1]<100){
            smsControl();
        }

        if ( count($part) == 3 ) {
            return $part[1];
        } else {
            return false;
        }
    }
}

if(!function_exists('getRealIp')) {
    function getRealIp()
    {
        if(getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
            if (strstr($ip, ',')) {
                $tmp = explode (',', $ip);
                $ip = trim($tmp[0]);
            }
        } else {
            $ip = getenv("REMOTE_ADDR");
        }
        return $ip;
    }
}

if(!function_exists('ftp_upload_file')) {
    function ftp_upload_file($directory = "", $destination_file, $source_file, $new_file = false, $type = "")
    {
        require_once SYSDIR . "libraries/FtpClient/FtpClient.php";
        $ftp = new FtpClient($type);

        $ftp->connect();
        $ftp->login();


        if ($directory != "") {
            $ftp->change_dir($directory);
        }

        $result = $ftp->put($destination_file, $source_file, $new_file);

        $ftp->close();

        return $result;

    }
}

if(!function_exists('ftp_delete_file')) {
    function ftp_delete_file($directory = "", $file, $type = "")
    {
        require_once SYSDIR . "libraries/FtpClient/FtpClient.php";
        $ftp = new FtpClient($type);

        $ftp->connect();
        $ftp->login();

        if ($directory != "") {
            $ftp->change_dir("public_html/".$directory);
        }

        $result = $ftp->delete("public_html/" . $file);

        $ftp->close();

        return $result;
    }
}

if(!function_exists('file_type_control')) {
    function file_type_control($file = "", $izinli_dosyalar = array()) //array('image/jpeg' => '.jpg', 'image/pjpeg' => '.jpg', 'image/png' => '.png','image/x-png' => '.png','image/gif' => '.gif')
    {
        $tur = $_FILES["$file"]['type'];

        if(!array_key_exists($tur, $izinli_dosyalar)){
            return false;
        }

        return true;
    }
}
?>