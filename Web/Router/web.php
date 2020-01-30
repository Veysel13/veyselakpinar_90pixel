<?php

use \System\Router\Router;



//data transfer  url
Router::get("/", "CategoryController@Index");
Router::get("/data-transfer", "CategoryController@Index");
Router::post("/data-transfer", "CategoryController@Add");


Router::get("/home", "HomeController@Index");
Router::get("/add", "HomeController@Add");
Router::get("/update", "HomeController@Update");
Router::get("/delete", "HomeController@Delete");







