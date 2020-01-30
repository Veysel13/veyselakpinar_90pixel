<?php
namespace System\General;

class Session
{
    static public $encryption_key = '';

    public function __construct(){

        self::$encryption_key = "Vt5h4CK1hvWiSBMlITPS8Qd6ZpuKB4N2";
        if(PHP_SESSION_ACTIVE != session_status () ){
            @session_start();
        }
    }

    public static function init(){

        if(!isset($_SESSION)){

            session_start();

            self::set('session_hash', self::generate_hash());

        } else {

            if(self::get('session_hash') != self::generate_hash()){

                self::destroy();

            }

        }


    }

    public static function set($key, $value = null){

        if(PHP_SESSION_ACTIVE != session_status () ){
            @session_start();
        }
        if(is_array($key)) {
            foreach($key as $anahtar => $deger) {
                $_SESSION[$anahtar] = $deger;
            }

        } else {
            $_SESSION[$key] = $value;
        }

    }

    public static function get($key = null){

        if(PHP_SESSION_ACTIVE != session_status () ){
            @session_start();
        }

        if(is_null($key)) {

            return $_SESSION;
        }else {
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            } else {
                return false;

            }

        }

    }

    public static function sessionToken($name) {
        $headers = isset($_SESSION[$name])?$_SESSION[$name]:null;
        if (!empty($headers))
        {
            return $headers;
        }
        return null;
    }

    public static function delete($key){

        if(PHP_SESSION_ACTIVE != session_status () ){
            @session_start();
        }
        if(is_array($key)) {

            foreach($key as $anahtar) {

                if (isset($_SESSION[$anahtar])) {

                    unset($_SESSION[$anahtar]);

                }

            }

        }else {

            if (isset($_SESSION[$key])) {

                unset($_SESSION[$key]);

            }

        }

    }

    public static function setFlash($key, $value = null, $type = "info"){

    }

    public static function getFlash($key, $value = null){

    }

    public static function checkSession(){

        self::init();

        if(self::get("login") == false){

            self::destroy();

            header("Location: ". BASEURL );

        }

    }

    public static function destroy(){

        unset($_SESSION);

        session_destroy();

    }

    public static function generate_hash(){

        return md5(sha1(md5($_SERVER['REMOTE_ADDR'] . self::$encryption_key. $_SERVER['HTTP_USER_AGENT'])));

    }



}
