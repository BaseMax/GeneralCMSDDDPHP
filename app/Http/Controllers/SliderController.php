<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\SliderPositionService;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        return json_encode((new SliderPositionService())->all());
    }
}
