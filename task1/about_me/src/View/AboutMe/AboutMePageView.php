<?php


namespace App\View;


use Symfony\Component\HttpFoundation\Response;

class AboutMePageView
{
    public function __construct(array $hobbies)
    {
        $this->hobbies = $hobbies;
    }

    public function buildParams(string $templateName): array
    {
      return ["hobies" => $this->hobbies];
    }
}