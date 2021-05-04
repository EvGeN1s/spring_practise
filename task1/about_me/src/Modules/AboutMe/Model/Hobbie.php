<?php


namespace App\Modules\AboutMe\Model;


class Hobbie
{
    public function __construct(string $keyword, string $name,array $images)
    {
      $this->keyword = $keyword;
      $this->name = $name;
      $this->images = $images;
    }
}