<?php


namespace App\View\AboutMe;


use Symfony\Component\HttpFoundation\Response;

class AboutMePageView
{
    public function __construct(array $hobbies)
    {
        $this->hobbies = $hobbies;
    }

    public function buildParams(string $templateName): array
    {
      return ["hobbies" => $this->hobbies];
    }
}