<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/bonjour/{name}', name: 'app_home')]
    public function index($name): JsonResponse
    {
        return $this->json([
            'message' => "Bonjour $name",
        ]);
    }
}
