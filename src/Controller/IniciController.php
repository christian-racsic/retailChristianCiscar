<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IniciController extends AbstractController{
    #[Route('/', name:'inici')]
    public function inici() {
        //return new Response("Gestio d'equips del projecte de 2n de DAW - Conseguida");
        return $this->render('base.html.twig');
    }
}
?>

