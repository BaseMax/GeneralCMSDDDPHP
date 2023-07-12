<?php if (!LOADED) exit;

use CMS\Http\Controllers\AuthController;
use CMS\Http\Controllers\HomeController;


return [
    ["GET", "/", [HomeController::class, "index"]],
    ["GET", "/register", [AuthController::class, "register"]],
    ["GET", "/login", [AuthController::class, "login"]],
    ["POST", "/register", [AuthController::class, "store"]],
    ["POST", "/logout", [AuthController::class, "logout"]],
    ["POST", "/login", [AuthController::class, "login"]],
    [""]
];
