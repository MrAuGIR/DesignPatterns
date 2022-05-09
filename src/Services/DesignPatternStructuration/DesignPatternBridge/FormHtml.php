<?php

namespace App\Services\DesignPatternStructuration\DesignPatternBridge;

class FormHtml implements FormulaireInterface
{
    public function dessineTexte(string $texte): void
    {
        echo "HTML : $texte ".PHP_EOL;
    }

    public function gereZoneSaisie(): string
    {
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp,1024));

        return $line;
    }
}