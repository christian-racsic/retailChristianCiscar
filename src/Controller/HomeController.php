<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{
    #[Route('/home', name:'home')]
    public function home() {
        return $this->render('inici.html.twig');
    }
}
?>