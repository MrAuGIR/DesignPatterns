<?php

namespace App\Services\DesignPatternStructuration\DesignPatternBridge;

interface FormulaireInterface
{
    public function dessineTexte(string $texte): void;

    public function gereZoneSaisie():string;
}