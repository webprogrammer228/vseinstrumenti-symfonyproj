<?php

namespace App\Controller\Order;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/order")
 */
class OrderController
{
    /**
     * @Route ("/show/{id}", name="order.show")
     */
    public function showOrder($id): Response
    {
        return new Response('order'. $id);
    }
}