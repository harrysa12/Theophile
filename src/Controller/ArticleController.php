<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{

    /**
     * @Route("/reborn", name="reborn")
     */
    public function reborn(Request $request)
    {
        // on renvoie une réponse qui contient de l'HTML à l'aide de twig.
        return $this->render('article/reborn.html.twig');
    }
 

    /**
     * @Route("/url", name="ROUTE_NAME")
     */
    public function method(Request $request)
    {
        // on renvoie une réponse qui contient de l'HTML à l'aide de twig.
        return $this->render('article/ton_html.html.twig');
    }
 
     /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/about.html.twig', []);
    }
    /**
     * @Route("/ignaces", name="ignaces")
     */
    public function ignacesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/ignaces.html.twig', []);
    }

    /**
     * @Route("/antioche", name="antioche")
     */
    public function antiocheAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/antioche.html.twig', []);
    }

    /**
     * @Route("/tertulien", name="tertulien")
     */
    public function tertulienAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/tertulien.html.twig', []);
    }

    /**
     * @Route("/tsth", name="tsth")
     */
    public function tsthAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/tsth.html.twig', []);
    }

        /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('article/contact.html.twig', []);
    }



}
