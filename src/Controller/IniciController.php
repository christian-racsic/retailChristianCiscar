<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IniciController
{
    /**
     * @Route("/", name="inici")
     */
    public function inici(): Response
    {
        return new Response("Projecte Gestió Retail de 2n de DAW");
    }
}
