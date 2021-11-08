<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    /**
     * @Route ("/", name="homepage")
     */

    public function indexAction() : Response
    {
        return new Response('This is my home page');
    }

    /**
     * @Route ("/name/{name}", name="show-name")
     */

    public function showNameAction($name) : Response
    {
        $randomNumber = random_int(1, 100);
        return $this->render('order/show.html.twig', [
            'number' => $randomNumber,
            'number_list' => [
                5,
                2,
                1,
                4,
                3
            ]
        ]);
    }
}

