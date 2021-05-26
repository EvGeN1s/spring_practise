<?php


namespace App\Modules\AboutMe\Infrastructure;


use App\Modules\AboutMe\App\HobbieConfigurationInterface;

class ConstHobbieConfiguration implements HobbieConfigurationInterface
{
    const HOBBIE_MAP = ["basketball" => "basketball",
        "programming" => "js|html|css|php|c+programming",
        "computer games" => "theWitcher|metro2033|Rainbow6|FarCry",
    ];

    public function getHobbieMap(): array
    {
        return self::HOBBIE_MAP;
    }
}