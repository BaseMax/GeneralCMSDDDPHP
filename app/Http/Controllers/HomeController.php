<?php

namespace CMS\Http\Controllers;

use CMS\Http\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // dd("hello");
        return View::render("test.twig");
    }
}