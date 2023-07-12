<?php

namespace CMS\Services;

use CMS\Repositories\CategoryRepository;

class CategoryService extends Service
{
    public function all(): array
    {
        return (new CategoryRepository())->all();
    }
}
