<?php


namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\Model\Hobbie;

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