<?php
namespace App\Service;

class ServeiDadesEquips {
    private $equips = array(
        array(
            "codi" => "1",
            "nom" => "Alpha Team",
            "cicle" => "DAW",
            "curs" => "2023/24",
            "membres" => array("Laura", "Pau", "Isabel", "Raul")
        ),
        array(
            "codi" => "2",
            "nom" => "Blue Squad",
            "cicle" => "DAM",
            "curs" => "2023/24",
            "membres" => array("Adrian", "Clara", "Jorge", "Lucia")
        ),
        array(
            "codi" => "3",
            "nom" => "Green Alliance",
            "cicle" => "ASIX",
            "curs" => "2023/24",
            "membres" => array("Mario", "Nerea", "Andres", "Sara")
        ),
        array(
            "codi" => "4",
            "nom" => "Golden Crew",
            "cicle" => "SMX",
            "curs" => "2023/24",
            "membres" => array("Hugo", "Emma", "Mateo", "Sofia")
        )
    );

    public function get() {
        return $this->equips;
    }
}
?>
