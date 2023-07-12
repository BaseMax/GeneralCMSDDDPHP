<?php

namespace CMS\Services;

use CMS\Models\SliderSlide;
use CMS\Repositories\SliderSlideRepository;

class SliderSlideService extends Service
{
    public function all(): array
    {
        return (new SliderSlideRepository())->all();
    }

    public function create(array $slider): void
    {
        $sliderSlide = SliderSlide::create($slider["slider_position_id"], $slider["image"], $slider["title"], $slider["description"], $slider["link"]);

        (new SliderSlideRepository())->create($sliderSlide);
    }
}
