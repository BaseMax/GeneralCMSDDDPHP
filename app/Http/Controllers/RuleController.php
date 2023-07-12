<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Repositories\RuleRepository;

class RuleController extends Controller
{
    public function index(Request $request)
    {
        return json_encode((new RuleRepository())->all());
    }
}
