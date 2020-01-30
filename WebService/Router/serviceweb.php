<?php

use \System\Router\Router;

Router::get("/service/home", "Service\Home\ServiceHomeController@Index");
