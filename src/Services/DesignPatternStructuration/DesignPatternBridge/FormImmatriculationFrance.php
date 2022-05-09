<?php

namespace App\Services\DesignPatternStructuration\DesignPatternBridge;

class FormImmatriculationFrance extends AbstractFormulaireImmatriculation
{
    protected const NBR_CARACTERES = 7;

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