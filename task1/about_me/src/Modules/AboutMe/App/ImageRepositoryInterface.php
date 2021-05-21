<?php


namespace App\Modules\AboutMe\App;


interface ImageRepositoryInterface
{
    public function deleteImages(string $keyword);
    public function getImages(string $keyword): ?array;
    public function addImages(string $keyword, array $urls);
}