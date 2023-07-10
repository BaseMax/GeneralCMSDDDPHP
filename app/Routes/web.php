<?php if (!LOADED) exit;

use CMS\Http\Controllers\AuthController;
use CMS\Http\Controllers\HomeController;


return [
    ["GET", "/", [HomeController::class, "index"]],
    ["GET", "/register", [AuthController::class, "register"]],
    ["GET", "/login", [AuthController::class, "login"]]
];
