<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\PostService;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return json_encode(
            (new PostService())->all()
        );
    }

    public function store(Request $request)
    {
        $post = (new PostService())->create($request);
        return json_encode(
            ["status" => "successful"]
        );
    }

    public function destroy(Request $request, int $id)
    {
        (new PostService())->delete($id);

        return json_encode([
            "status" => "successful"
        ]);
    }
}