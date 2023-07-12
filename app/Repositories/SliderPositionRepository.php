<?php

namespace CMS\Repositories;

use CMS\Models\SliderPosition;
use PDO;

class SliderPositionRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all(): array
    {
        $stmt = $this->getDB()->prepare(
            "SELECT * FROM slider_position"
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(SliderPosition $sliderPosition): void
    {
        $stmt = $this->getDB()->prepare(
            "INSERT INTO slider_positions (`name`, `slug`) VALUES (?, ?)"
        );

        $stmt->execute([
            $sliderPosition->getName(),
            $sliderPosition->getSlug()
        ]);


    }
}