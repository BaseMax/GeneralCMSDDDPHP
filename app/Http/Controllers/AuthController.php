<?php

namespace CMS\Http\Controllers;

use CMS\Facades\Cookie;
use CMS\Facades\View;
use CMS\Http\Request;
use CMS\Services\UserService;

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
        $userId = (new UserService())->add([
            $request->postParams
        ]);

        Cookie::set($userId);
        
        return json_encode([
            "status" => 1
        ]);
    }

    public function logout(Request $request)
    {
        Cookie::delete($request);

        return json_encode([
            "status" => 1
        ]);
    }

    public function check(Request $request)
    {
        return (new UserService())->find([
            "email" => $request->postParams["email"],
            "password" => $request->postParams["password"]
        ]);
    }
}