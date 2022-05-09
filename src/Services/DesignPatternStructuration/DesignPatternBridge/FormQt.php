<?php

namespace App\Services\DesignPatternStructuration\DesignPatternBridge;


class FormQt implements FormulaireInterface
{
    public function dessineTexte(string $texte): void
    {
        echo "Qt : $texte ".PHP_EOL;
    }

    public function gereZoneSaisie(): string
    {
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp,1024));

        return $line;
    }
}