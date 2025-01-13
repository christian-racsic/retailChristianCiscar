<?php
namespace App\Service;

class ServeiDadesEquips {
    private $equips = array(
        array(
            "codi" => "1",
            "nom" => "Power Lifters",
            "categoria" => "Fuerza",
            "nivel" => "Avanzado",
            "membres" => array("Carlos", "María", "Javier", "Ana")
        ),
        array(
            "codi" => "2",
            "nom" => "Cardio Champs",
            "categoria" => "Resistencia",
            "nivel" => "Intermedio",
            "membres" => array("Laura", "Pablo", "Claudia", "Tomás")
        ),
        array(
            "codi" => "3",
            "nom" => "Flex Masters",
            "categoria" => "Flexibilidad",
            "nivel" => "Básico",
            "membres" => array("Sofia", "Diego", "Nuria", "Andrés")
        ),
        array(
            "codi" => "4",
            "nom" => "Core Warriors",
            "categoria" => "Core",
            "nivel" => "Avanzado",
            "membres" => array("Hugo", "Carla", "Raúl", "Isabel")
        )
    );

    public function get() {
        return $this->equips;
    }
}
?>
