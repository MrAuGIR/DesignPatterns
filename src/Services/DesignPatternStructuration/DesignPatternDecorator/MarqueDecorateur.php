<?php

namespace App\Services\DesignPatternStructuration\DesignPatternDecorator;

class MarqueDecorateur extends AbstractDecorateur
{
    public function affiche(): void
    {
        parent::affiche();
        $this->afficheLogo();
    }

    protected function afficheLogo():void{
        echo 'logo de la marque'.PHP_EOL;
    }
}