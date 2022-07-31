<?php

namespace App\Controller;

use App\Repository\PeintureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationController extends AbstractController
{
    #[Route('/realisation', name: 'realisation')]
    public function index(PeintureRepository $peintureRepository): Response
    {
        return $this->render('realisation/index.html.twig', [
            'peintures' => $peintureRepository->findAll()
        ]);
    }
}
