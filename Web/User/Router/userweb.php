<?php

use \System\Router\Router;


Router::get("/user/home", "User\UserHomeController@Index");
Router::get("/user-giris-yap", "User\UserAuthController@Login");
Router::post("/user-giris-yap", "User\UserAuthController@Post_Login");
