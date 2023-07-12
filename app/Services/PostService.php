<?php

namespace CMS\Services;

use CMS\Http\Request;
use CMS\Models\Post;
use CMS\Repositories\PostRepository;

class PostService extends Service
{
    public function all(): array
    {
        return (new PostRepository())->all();
    }

    public function create(Request $request): Post
    {
        $post = Post::create(
            $request->postParams["title"],
            $request->postParams["slug"],
            $request->postParams["content"],
            $request->postParams["fullcontent"],
            $request->postParams["author"]
        );

        (new PostRepository())->create($post);

        return $post;
    }

    public function delete(int $id): void
    {
        (new PostRepository())->delete($id);
    }
}
