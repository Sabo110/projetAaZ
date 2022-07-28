<?php

namespace App\Controller;

use App\Repository\BlogPostRepository;
use App\Repository\PeintureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PeintureRepository $peintureRepository, BlogPostRepository $blogPostRepository): Response
    {
        
       
        return $this->render('home/index.html.twig', [
            'peintures' => $peintureRepository->troiderniere(),
            'blogposts' => $blogPostRepository->troisderniere()
        ]);
    }
}
