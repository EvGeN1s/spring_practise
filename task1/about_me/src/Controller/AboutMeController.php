<?php


namespace App\Controller;


use App\Modules\AboutMe\App\HobbieService;
use App\View\AboutMe\AboutMePageView;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Modules\AboutMe\App\ImageProviderInterface;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class AboutMeController extends AbstractController
{
    public function page(HobbieService $hobbieService): Response
    {
        $view = new AboutMePageView($hobbieService->getHobbies());

        return $this->render('/about-me/index.html.twig', $view->buildParams('/about-me/index.html.twig'));
    }

    public function updateImages(HobbieService $hobbieService, Request $request): Response
    {
        $hobbieService->updateHobbies($request->request->get('keyword') ?? '');
        return new Response('OK');

    }
}