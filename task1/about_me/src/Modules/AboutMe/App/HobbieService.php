<?php


namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\App\HobbieConfigurationInterface;
use App\Modules\AboutMe\Infrastructure\ConstHobbieConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;
use App\Modules\AboutMe\App\ImageProviderInterface;



class HobbieService
{
    public function __construct()
    {
        $this->hobbieMap = ConstHobbieConfiguration::getHobbieMap();
    }

    public function getHobbies(): array
    {
        $hobbies = [];
        foreach ($this->hobbieMap as $name => $keyword)
        {

           $images = ImageProvider::getUrls($keyword);
           $hobbie = new Hobbie($keyword, $name, $images);
           $hobbies += $hobbie;
        }
        return $hobbies;
    }
}