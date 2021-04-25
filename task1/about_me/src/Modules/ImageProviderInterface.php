<?php


namespace App\Modules;



interface ImageProviderInterface
{
    public function getUrls(string $keywords);
}