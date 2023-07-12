<?php

namespace CMS\Services;

use CMS\Repositories\FaqRepository;

class FaqService extends Service
{
    public function all(): array
    {
        return (new FaqRepository())->all();
    }
}
