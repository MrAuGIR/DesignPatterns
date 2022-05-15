<?php

namespace App\Services\DesignPatternStructuration\DesignPatternDecorator;

class ModeleDecorateur extends AbstractDecorateur
{
    public function affiche(): void
    {
        parent::affiche();
        $this->afficheInfosTechniques();
    }

    public function afficheInfosTechniques():void
    {
        echo 'Informations technique  du modèle'.PHP_EOL;
    }
}