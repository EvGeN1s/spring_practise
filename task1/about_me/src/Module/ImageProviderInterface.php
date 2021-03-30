<?php


namespace App\Module;


interface ImageProviderInterface
{
    public function getUrls(): array;
}