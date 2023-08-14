<?php

use App\Core\Routing\Routs;
use App\Middleware\BlockIE;

$Router = new Routs();

$Router::get("/null", 'HomeController@index');
$Router::get("/", 'HomeController@index');
$Router::post("/Contact/add", 'HomeController@add');
$Router::post("/Contact/edit", 'HomeController@edit');
$Router::get("/Contact/delete", 'HomeController@delete');

