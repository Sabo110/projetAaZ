<?php

namespace App\Controller;

use App\Repository\BlogPostRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogpostController extends AbstractController
{
    #[Route('/actualite', name: 'actualite')]
    public function actualite(BlogPostRepository $blogPostRepository, Request $request, PaginatorInterface $paginator): Response
    {
        // $donnes = $blogPostRepository->findAll();
        // $actualite = $paginator->paginate(
        //     $donnes,
        //     $request->query->getInt('page', 1),
            //3
        $donnes = $paginator->paginate(
           $blogPostRepository->findAll(),
           $request->query->getInt('page', 1),
           3
        );

        return $this->render('blogpost/actualite.html.twig', [
            
            'blogposts' => $donnes,
            // 'blogposts'=> $donnes, 
            // 'pagination'=> $actualite
        ]);
    }
}
