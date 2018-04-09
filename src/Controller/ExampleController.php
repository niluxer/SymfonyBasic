<?php
/**
 * Created by PhpStorm.
 * User: niluxer
 * Date: 3/12/18
 * Time: 19:41
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        //return new Response("Home Page");
        return $this->render("index.html.twig");
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        //return new Response("Home Page");
        return $this->render("about.html.twig");
    }

    /**
     * @Route("/blog1", name="blog1")
     */
    public function blog()
    {
        //return new Response("Home Page");
        return $this->render("blog.html.twig");
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        //return new Response("Home Page");
        return $this->render("contact.html.twig");
    }

    /**
     * @Route("/services", name="services")
     */

    public function services()
    {
        //return new Response("My services");
        return $this->render("Example/services.html.twig");
    }

    /**
     * @Route("/sayhello/{name}", name="sayhello")
     */

    public function sayhello($name)
    {
        return new Response("Hello " . $name . ", nice to meet you...");
    }

}