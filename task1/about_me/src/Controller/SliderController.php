<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Modules\ImageProvider;

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