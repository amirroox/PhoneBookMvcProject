<?php

use App\Core\Routing\Routs;
use App\Middleware\BlockIE;

$Router = new Routs();

$Router::get("/null", 'HomeController@index');
$Router::get("/", 'HomeController@index');
$Router::post("/add/Contact", 'HomeController@add');

