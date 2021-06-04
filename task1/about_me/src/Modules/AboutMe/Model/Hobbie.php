<?php


namespace App\Modules\AboutMe\Model;


class Hobbie
{
    private string $keyword;
    private string $name;
    private array $images; /*Array of string*/
    public function __construct(string $keyword, string $name, array $images /*Array of string*/)
    {
        $this->keyword = $keyword;
        $this->name = $name;
        $this->images = $images;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImages(): array
    {
        return $this->images;
    }
}