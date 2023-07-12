<?php

namespace CMS\Repositories;

use CMS\Models\SliderSlide;
use PDO;

class SliderSlideRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all(): array
    {
        $stmt = $this->getDB()->prepare(
            "SELECT * FROM slider_slide"
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(SliderSlide $slider): void
    {
        $stmt = $this->getDB()->prepare(
            "INSERT INTO slider_slide (`slider_position_id`, `image`, `title`, `description`, `link`) VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->execute([
            $slider->getSliderPositionId(),
            $slider->getImage(),
            $slider->getTitle(),
            $slider->getDescription(),
            $slider->getLink()
        ]);
    }
}
