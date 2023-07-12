<?php if (!LOADED) exit;

use CMS\Http\Controllers\AuthController;
use CMS\Http\Controllers\HomeController;
use CMS\Http\Controllers\PostController;
use CMS\Http\Controllers\UserRuleController;

return [
    ["GET", "/", [HomeController::class, "index"]],
    ["GET", "/register", [AuthController::class, "register"]],
    ["GET", "/login", [AuthController::class, "login"]],
    ["POST", "/register", [AuthController::class, "store"]],
    ["POST", "/logout", [AuthController::class, "logout"]],
    ["POST", "/login", [AuthController::class, "login"]],
    ["GET", "/posts", [PostController::class, "index"]],
    ["POST", "/posts", [PostController::class, "store"]],
    ["DELETE", "/posts/{id:\d+}", [PostController::class, "destroy"]],
    ["GET", "/users/{id:\d+}/permission", [UserRuleController::class, "show"]]
];
