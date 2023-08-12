<?php

use App\Core\Request;

const BASEPATH = __DIR__ . "/../";
include BASEPATH . "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
define("BASEHOST", $_ENV['HOST']);

$request = new Request();

include BASEPATH . "helpers/helper.php";
include BASEPATH . "Routs/web.php";
