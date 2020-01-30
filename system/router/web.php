<?php

use \System\Router\Router;





Router::get("/404", "ErrorControllers@Index");
Router::get("/{alnum}", "AuthController@remoteregister");

Router::set404(function() {
    $resp=response(array("success" => 0, "error_message" => response_message(100), "error_code" => 100));
    print_r($resp);
});

Router::execute();

/*

Router::prefix('admin')->group(function(){
    Router::get('users', function(){

    });
});

'{all}'     => '([^/]+)',           her şeyi kabul eder
'{num}'     => '([0-9]+)',          sayı kabul eder
'{alpha}'   => '([a-zA-Z]+)',       harf kabul eder
'{alnum}'   => '([a-zA-Z0-9_-]+)'   rakam kabu eder

*/
