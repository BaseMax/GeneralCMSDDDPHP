<?php if (!LOADED) exit;

use CMS\Http\Controllers\AuthController;
use CMS\Http\Controllers\FaqController;
use CMS\Http\Controllers\HomeController;
use CMS\Http\Controllers\PostController;
use CMS\Http\Controllers\RuleController;
use CMS\Http\Controllers\SliderController;
use CMS\Http\Controllers\SliderSlideController;
use CMS\Http\Controllers\TagController;
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
    ["GET", "/users/{id:\d+}/permission", [UserRuleController::class, "show"]],
    ["GET", "/permissions", [RuleController::class, "index"]],
    ["GET", "/sliders", [SliderController::class, "index"]],
    ["POST", "sliders", [SliderController::class, "store"]],
    ["GET", "/sliderslides", [SliderSlideController::class, "index"]],
    ["POST", "sliderslides", [SliderSlideController::class, "store"]],
    ["GET", "/tags", [TagController::class, "index"]],
    ["POST", "tags", [TagController::class, "store"]],
    ["GET", "/faq", [FaqController::class, "index"]]
];
