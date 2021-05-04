<?php


namespace App\Modules\AboutMe;


interface ImageProviderInterface
{
    public function getUrls(string $keywords);
}