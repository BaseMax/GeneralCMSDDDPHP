<?php

namespace CMS\Services;

use CMS\Models\Tag;
use CMS\Repositories\TagRepository;

class TagService extends Service
{
    public function all(): array
    {
        return (new TagRepository())->all();
    }

    public function create(array $tag): void
    {
        $tag = Tag::create($tag["text"]);

        (new TagRepository())->create($tag);
    }
}
