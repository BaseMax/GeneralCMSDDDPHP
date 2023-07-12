<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\FaqService;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        return json_encode((new FaqService())->all());
    }
}