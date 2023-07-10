<?php if (!LOADED) exit;

use CMS\Http\Controllers\HomeController;


return [
    ["GET", "/", [HomeController::class, "index"]]
];
