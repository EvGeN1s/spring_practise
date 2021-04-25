<?php


namespace App\Modules;
use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider implements ImageProviderInterface
{
  private string $keywords;

    public function getUrls(string $keywords): array
  {
      $this->keywords = $keywords;
      $urls = $this->fetchUrls();
      shuffle($urls);
      $urls = array_slice($urls, 0, 5);
      return $urls;
  }

    private function fetchUrls(): array
 {
      return ImageSpider::find($this -> keywords);
 }

}