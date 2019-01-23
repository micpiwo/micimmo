<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * HomeController constructor.
     * @param Environment $twig
     */

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @param PropertyRepository $repository
     * @return Response
     */
    public function index(PropertyRepository $repository):Response
    {
        $properties = $repository->findAllLatest();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'properties' => $properties
        ]);
    }
}
