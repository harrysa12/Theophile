<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $articles = [
            [
                'title' => "N'importe, c'est nouveau 🥰😃",
                'route' => 'reborn',
                'author' => 'Harry Christiaens & Benjamin Ellis',
                'created' => \DateTime::createFromFormat('d-m-Y', '23-02-2020'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '23-02-2020'),
                'tag' => [''],
            ],
            [
                'title' => 'La ville d’Antioche, la ville de Homs en Syrie (Emeès)',
                'route' => 'antioche',
                'author' => 'Harry Christiaens',
                'created' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tag' => [''],
            ],
            [
                'title' => 'Ignaces',
                'route' => 'ignaces',
                'author' => 'Benjamin Ellis',
                'created' => \DateTime::createFromFormat('d-m-Y', '04-11-2017'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tag' => [''],
            ],
            [
                'title' => 'Tertulien',
                'route' => 'tertulien',
                'author' => 'Harry',
                'created' => \DateTime::createFromFormat('d-m-Y', '04-11-2017'),
                'last_modified' => \DateTime::createFromFormat('d-m-Y', '07-02-2017'),
                'tag' => [''],
            ],
        ];

        // replace this example code with whatever you need
        return $this->render('content/index.html.twig', [
            'articles' => $articles,
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('content/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
