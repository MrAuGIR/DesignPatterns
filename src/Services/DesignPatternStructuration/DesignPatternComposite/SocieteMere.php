<?php

namespace App\Services\DesignPatternStructuration\DesignPatternComposite;

class SocieteMere extends AbstractSociete
{
    protected array $filiales = [];

    public function ajouteFiliale(abstractSociete $societe): bool
    {
        $this->filiales[] = $societe;
        return true;
    }

    public function calculCoutEntretien(): float
    {
        $cout = 0.0;
        foreach ($this->filiales as $filiale) {
            $cout += $filiale->calculCoutEntretien();
        }

        return $cout + $this->nbrVehicules * self::$countUnitVehicule;
    }
}