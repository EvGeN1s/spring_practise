<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Module\ImageProvider;

class PageController extends AbstractController
{
    public function page(): Response
    {
        $basketballImages = new ImageProvider('basketball');
        $programmingImages = new ImageProvider('programming');
        $computerGamingImages = new ImageProvider('computer-games');

        return $this->render('/about-me/index.html.twig',[
            'urlsB' => $basketballImages -> getUrls(),
            'urlsP' => $programmingImages -> getUrls(),
            'urlsC' => $computerGamingImages -> getUrls()
        ]);
    }
}