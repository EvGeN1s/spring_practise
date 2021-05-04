<?php


namespace App\Modules\AboutMe\Infrasrtucture;


use App\Modules\AboutMe\App\HobbieConfigurationInterface;

class ConstHobbieConfiguration implements HobbieConfigurationInterface
{
    const HOBBIE_MAP = ["basketball" => "basketball",
        "programming" => "js_php_html_css_c#",
        "computer games" => "theWithcer_cs-go_metro2033_Rainbow6_FarCry",
    ];

    public function getHobbieMap(): array
    {
        return self::HOBBIE_MAP;
    }
}