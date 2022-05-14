<?php

namespace App\Services\DesignPatternStructuration\DesignPatternComposite;

class SocieteSansFiliale extends AbstractSociete
{
    public function ajouteFiliale(abstractSociete $societe): bool
    {
        return false;
    }
    
    public function calculCoutEntretien():float{
        return $this->nbrVehicules * self::$countUnitVehicule;
    }
}