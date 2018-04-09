<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {

        $posts = $this->getDoctrine()->getRepository(Blog::class)->findAll();

        if (!$posts) {
            throw $this->createNotFoundException(
                'No products found '
            );
        }

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
