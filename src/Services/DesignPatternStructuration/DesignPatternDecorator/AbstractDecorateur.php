<?php

namespace App\Services\DesignPatternStructuration\DesignPatternDecorator;

use App\Services\DesignPatternStructuration\DesignPatternDecorator\ComposantGraphiqueVehiculeInterface;

abstract class AbstractDecorateur implements ComposantGraphiqueVehiculeInterface
{
    protected ComposantGraphiqueVehiculeInterface $composant;

    public function __construct(ComposantGraphiqueVehiculeInterface $composant) 
    {
        $this->composant = $composant;
    }

    public function affiche(): void
    {
        $this->composant->affiche();
    }
}