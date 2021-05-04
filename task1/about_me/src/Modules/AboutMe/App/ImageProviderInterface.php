<?php


namespace App\Modules\AboutMe\App;


interface ImageProviderInterface
{
    public function getUrls(string $keywords);
}