<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeccioController
{
    private array $seccions = [
        [
            "codi" => "1",
            "nom" => "Roba",
            "descripcio" => "Descripció de la secció",
            "any" => "2024",
            "articles" => ["Pantalons", "Camisa", "Jersey", "Xaqueta"]
        ],
        [
            "codi" => "2",
            "nom" => "Tecnologia",
            "descripcio" => "Secció de dispositius electrònics",
            "any" => "2024",
            "articles" => ["Mòbil", "Portàtil", "Tablet"]
        ],
        [
            "codi" => "3",
            "nom" => "Alimentació",
            "descripcio" => "Secció de productes d'alimentació",
            "any" => "2024",
            "articles" => ["Pa", "Llet", "Arròs"]
        ],
        [
            "codi" => "4",
            "nom" => "Esports",
            "descripcio" => "Secció d'articles esportius",
            "any" => "2024",
            "articles" => ["Pilota", "Sabates esportives", "Raqueta"]
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
                    "Codi: %s<br>Nom: %s<br>Descripció: %s<br>Any: %s<br>Articles: %s",
                    $seccio['codi'],
                    $seccio['nom'],
                    $seccio['descripcio'],
                    $seccio['any'],
                    implode(", ", $seccio['articles'])
                );

                return new Response($dades);
            }
        }

        return new Response("No s’ha trobat la secció: $codi");
    }
}
