<?php

namespace CMS\Http\Controllers;

use CMS\Facades\View;

class AuthController extends Controller
{
    public function register()
    {
        return View::render("auth/register");
    }

    public function login()
    {
        return View::render("auth/login");
    }
}