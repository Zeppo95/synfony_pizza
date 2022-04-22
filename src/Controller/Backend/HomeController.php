<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Repository\PizzaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/admin', name: 'app_backend_home_home', methods: ['GET'])]
    public function home(PizzaRepository $repository): Response
    {
        $pizzas = $repository->findAll();

        return $this->render('backend/home/home.html.twig', [
            'pizzas' => $pizzas,
        ]);
    }
}