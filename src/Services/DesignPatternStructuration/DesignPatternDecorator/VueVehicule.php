<?php

namespace App\Services\DesignPatternStructuration\DesignPatternDecorator;

class VueVehicule implements ComposantGraphiqueVehiculeInterface
{
    public function affiche(): void
    {
        echo "Affichage du vehicule".PHP_EOL;
    }
}