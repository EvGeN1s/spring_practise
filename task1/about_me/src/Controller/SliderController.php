<?php


namespace App\Controller;

use App\Modules\AboutMe\Infrastructure\ImageProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class SliderController extends AbstractController
{
    public function slider(): Response
    {
        $basketballImages = new ImageProvider();

        return $this->render('/about-me/slider.html.twig', [
            'urls' => $basketballImages->getUrls('basketball'),
        ]);
    }
}