<?php

namespace CMS\Services;

use CMS\Models\SliderPosition;
use CMS\Repositories\SliderPositionRepository;

class SliderPositionService extends Service
{
    public function all(): array
    {
        return (new SliderPositionRepository())->all();
    }

    public function create(array $slider): void
    {
        $sliderPosition = SliderPosition::create(
            $slider["name"],
            $slider["slug"]
        );

        (new SliderPositionRepository())->create($sliderPosition);
    }
}
