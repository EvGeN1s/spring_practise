<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Modules\ImageProviderInterface;
use App\Modules\ImageProvider;

class PageController extends AbstractController
{
    public function page(ImageProviderInterface $imageProvider): Response
    {
        $googleImageProvider = new ImageProvider;


        return $this->render('/about-me/index.html.twig',[
            'urlsB' => $googleImageProvider->getUrls('basketball'),
            'urlsP' => $googleImageProvider->getUrls('programing'),
            'urlsC' => $googleImageProvider->getUrls('computer-games')
        ]);
    }
}