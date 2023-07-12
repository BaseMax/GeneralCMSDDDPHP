<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\SliderSlideService;

class SliderSlideController extends Controller
{
    public function index(Request $request)
    {
        return json_encode((new SliderSlideService())->all());
    }

    public function store(Request $request)
    {
        (new SliderSlideService())->create([
            "slider_position_id" => $request->postParams["slider_position_id"],
            "image" => $request->postParams["image"],
            "title" => $request->postParams["title"],
            "description" => $request->postParams["description"],
            "link" => $request->postParams["link"]
        ]);
        return json_encode([
            "status" => "successful"
        ]);
    }
}
