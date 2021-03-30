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
      $urls = $this->setUrls();
      shuffle($urls);
      $urls = array_slice($urls, 0, 5);
      return $urls;
  }


  private function setUrls(): array
 {
      return ImageSpider::find($this -> hobbie);
 }

}