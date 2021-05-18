<?php


namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\App\HobbieConfigurationInterface;
use App\Modules\AboutMe\App\ImageProviderInterface;
use App\Modules\AboutMe\Infrastructure\ConstHobbieConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;




class HobbieService
{
    public function __construct(HobbieConfigurationInterface $hobbieConfiguration, ImageProviderInterface $imageProvider)
    {
        $this->hobbieMap = $hobbieConfiguration->getHobbieMap();
        $this->imageProvider = $imageProvider;
    }

    public function getHobbies(): array
    {
        $hobbies = [];
        foreach ($this->hobbieMap as $name => $keyword)
        {
           $images = $this->imageProvider->getUrls($keyword);
           $hobbie = new Hobbie($keyword, $name, $images);
           array_push($hobbies, $hobbie);
        }
        return $hobbies;
    }
}