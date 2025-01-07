<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\ServeiDadesEquips;

class EquipsController extends AbstractController{
    
    private $equips;
    public function __construct(ServeiDadesEquips $dadesEquips) {
        $this->equips = $dadesEquips->get();
    }

    #[Route('/equip', name:'dades_equips', requirements: ['codi' => '\d+'])]
    public function equip(){

        $serveiDadesEquips = new ServeiDadesEquips();
        $equips = $serveiDadesEquips->get();

        

        return $this->render('dades_equip.html.twig', ['equips' => $equips]);
    }

    #[Route('/equip/{codi}', name:'info_equips', requirements: ['codi' => '\d+'])]
    public function info_equips($codi, ServeiDadesEquips $serveiDadesEquips){

        $equips = $serveiDadesEquips->get(); // Obtén los equipos utilizando tu servicio

        $equipSeleccionat = null;
        foreach ($equips as $equip) {
            if($equip['codi'] == $codi) {
                $equipSeleccionat = $equip;
                break;
            }
        }

        if ($equipSeleccionat === null) {
            $equipSeleccionat = reset($equips);
        }

        return $this->render('info_equip.html.twig', ['equip' => $equipSeleccionat]);
    }

}

?>