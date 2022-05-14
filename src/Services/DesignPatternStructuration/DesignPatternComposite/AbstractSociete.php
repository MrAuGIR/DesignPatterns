<?php 

namespace App\Services\DesignPatternStructuration\DesignPatternComposite;

abstract class AbstractSociete
{
    protected static float $countUnitVehicule = 5;

    protected int $nbrVehicules = 0;

    public function ajouteVehicule():void{
        $this->nbrVehicules++;
    }

    abstract public function calculCoutEntretien():float;

    abstract public function ajouteFiliale(abstractSociete $societe):bool;
}