<?php


namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Model\Image;

class HobbieService
{
    public function __construct(HobbieConfigurationInterface $hobbieConfiguration,
                                ImageProviderInterface $imageProvider,
                                ImageRepositoryInterface $imageRepository
    )
    {
        $this->hobbieMap = $hobbieConfiguration->getHobbieMap();
        $this->imageProvider = $imageProvider;
        $this->imageRepository = $imageRepository;
    }

    public function getHobbies(): array
    {
        $hobbies = [];

        foreach ($this->hobbieMap as $name => $keywords)
        {
            $urls = [];
            $images = $this->imageRepository->getImages($name);
            if ($images === null)
            {
                $this->updateHobbies($name);
                $images = $this->imageRepository->getImages($name);
            }

            if($images) foreach ($images as $image)
            {
                array_push($urls, $image->getUrl());
            }
            $hobbie = new Hobbie($keywords, $name, $urls);
            array_push($hobbies, $hobbie);
        }
        return $hobbies;
    }

    public function updateHobbies(string $keyword = null)
    {
        if ( $keyword === null)
        {
            foreach ($this->hobbieMap as $name => $keywords)
            {
                $this->imageRepository->deleteImages($name);
                $urls = $this->imageProvider->getUrls($keywords);
                $this->imageRepository->addImages($keyword, $urls);
            }
        }
        else
        {
            $this->imageRepository->deleteImages($keyword);
            $urls = $this->imageProvider->getUrls($this->hobbieMap[$keyword]);
            $this->imageRepository->addImages($keyword, $urls);
        }
    }
}