<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\CategoryService;

class CategoryController extends Controller
{
    public function index(Request $requests)
    {
        return json_encode((new CategoryService())->all());
    }
}
