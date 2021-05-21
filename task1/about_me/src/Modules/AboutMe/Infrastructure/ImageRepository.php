<?php


namespace App\Modules\AboutMe\Infrastructure;


use App\Modules\AboutMe\App\ImageRepositoryInterface;
use App\Modules\AboutMe\Model\Image;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;


class ImageRepository implements ImageRepositoryInterface
{
    private EntityManagerInterface $em;
    private ObjectRepository $repository;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository(Image::class);
    }

    public function deleteImages(string $keyword)
    {
        $images = $this->repository->findBy(['keyword' => $keyword]);
        foreach ($images as $image)
        {
            $this->em->remove($image);
        }
        $this->em->flush();
    }

    public function getImages(string $keyword): ?array
    {
        $images = $this->repository->findBy(['keyword' => $keyword]);
        if (empty($images)) {
            return null;
        } else {
            return $images;
        }
    }

    public function addImages(string $keyword, array $urls)
    {
        foreach ($urls as $url)
        {
            $image = new Image($keyword, $url);
            $this->em->persist($image);
        }
        $this->em->flush();
    }
}