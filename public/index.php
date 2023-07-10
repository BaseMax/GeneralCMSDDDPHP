<?php

declare(strict_types=1);

define("LOADED", true);
define("BASE_PATH", dirname(__DIR__));
define("VIEW_PATH", dirname(__DIR__) . "/app/Views");

require_once dirname(__DIR__) . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$request = CMS\Http\Request::createFromGlobals();

$kernel = new CMS\Http\Kernel();

$response = $kernel->handler($request);

$response->send();
