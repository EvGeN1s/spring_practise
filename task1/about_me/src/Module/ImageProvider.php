<?php


namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider
{
  private string $hobbie;

  public function __construct(string $hobbie)
  {
      $this->hobbie=$hobbie;
  }
  public function getUrls(): array
  {
      $urls = ImageSpider::find($this->hobbie);
      shuffle($urls);
      $urls = array_slice($urls, 0, 5);
      return $urls;
  }


//  public function getUrls(): array
//  {
//      return $this->;
//  }

}