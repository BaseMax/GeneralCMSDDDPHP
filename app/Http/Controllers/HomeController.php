<?php

namespace CMS\Http\Controllers;

use \CMS\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return View::render("test.twig");
    }
}