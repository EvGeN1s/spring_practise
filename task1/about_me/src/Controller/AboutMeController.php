<?php


namespace App\Controller;


use App\Modules\AboutMe\App\HobbieService;
use App\View\AboutMePageView;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Modules\ImageProviderInterface;
use App\Modules\ImageProvider;

class AboutMeController extends AbstractController
{
    public function page(HobbieService $hobbieService): Response
    {
        $view = new AboutMePageView($hobbieService->getHobbies());

        return $this->render('/about-me/index.html.twig', $view->buildParams('/about-me/index.html.twig'));
    }
}