<?php

namespace CMS\Http\Controllers;

use CMS\Facades\View;
use CMS\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return View::render("auth/register");
    }

    public function login(Request $request)
    {
        return View::render("auth/login");
    }

    public function store(Request $request)
    {
        dd($request);
    }
}