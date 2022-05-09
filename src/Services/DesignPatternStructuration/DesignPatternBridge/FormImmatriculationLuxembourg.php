<?php

namespace App\Services\DesignPatternStructuration\DesignPatternBridge;

class FormImmatriculationLuxembourg extends AbstractFormulaireImmatriculation
{
    protected const NBR_CARACTERES = 5;

    public function __construct(FormulaireInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    public function controleSaisie($plaque):bool{
        return strlen(trim($plaque)) == self::NBR_CARACTERES;
    }

    protected function getContrainte(): string
    {
        return self::NBR_CARACTERES.' car ';
    }
}