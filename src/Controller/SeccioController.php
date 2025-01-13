<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeccioController
{
    private array $seccions = [
        [
            "codi" => "1",
            "nom" => "Zona de Fuerza",
            "descripcio" => "Área equipada con máquinas y pesas libres para el entrenamiento de fuerza.",
            "any" => "2025",
            "actividades" => ["Press de banca", "Sentadillas", "Peso muerto", "Dominadas"]
        ],
        [
            "codi" => "2",
            "nom" => "Zona de Cardio",
            "descripcio" => "Espacio dedicado al entrenamiento cardiovascular con máquinas modernas.",
            "any" => "2025",
            "actividades" => ["Cinta de correr", "Elíptica", "Bicicleta estática", "Remo"]
        ],
        [
            "codi" => "3",
            "nom" => "Zona de Estiramientos",
            "descripcio" => "Espacio diseñado para mejorar la flexibilidad y recuperación muscular.",
            "any" => "2025",
            "actividades" => ["Estiramientos guiados", "Yoga", "Pilates"]
        ],
        [
            "codi" => "4",
            "nom" => "Zona Funcional",
            "descripcio" => "Área destinada a entrenamientos funcionales y circuitos dinámicos.",
            "any" => "2025",
            "actividades" => ["Burpees", "Kettlebell swings", "Box jumps", "Battle ropes"]
        ]
    ];

    /**
     * @Route("/seccio/{codi}", name="dades_seccio")
     */
    public function seccio(string $codi): Response
    {
        foreach ($this->seccions as $seccio) {
            if ($seccio['codi'] === $codi) {
                $dades = sprintf(
                    "Codi: %s<br>Nom: %s<br>Descripció: %s<br>Any: %s<br>Actividades: %s",
                    $seccio['codi'],
                    $seccio['nom'],
                    $seccio['descripcio'],
                    $seccio['any'],
                    implode(", ", $seccio['actividades'])
                );

                return new Response($dades);
            }
        }

        return new Response("No se ha encontrado la sección: $codi");
    }
}
