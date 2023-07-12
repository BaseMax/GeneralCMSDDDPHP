<?php

namespace CMS\Services;

use CMS\Repositories\SliderPositionRepository;

class SliderPositionService extends Service
{
    public function all(): array
    {
        return (new SliderPositionRepository())->all();
    }
}