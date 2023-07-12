<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\TagService;

class TagController extends Controller
{
    public function index(Request $request)
    {
        return json_encode((new TagService())->all());
    }

    public function store(Request $request)
    {
        (new TagService())->create([
            "text" => $request->postParams["text"]
        ]);

        return json_encode([
            "status" => "successful"
        ]);
    }
}