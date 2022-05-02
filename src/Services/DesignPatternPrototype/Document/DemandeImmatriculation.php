<?php
namespace App\Services\DesignPatternPrototype\Document;

use App\Services\DesignPatternPrototype\Document\AbstractDocument;

class DemmandeImmatriculation extends AbstractDocument
{
    public function affiche():void{
        echo "Affiche la demande d'immatriculation $this->content".PHP_EOL;
    }

    public function imprime():void
    {
        echo "Imprime le la demande d'immatriculation $this->content".PHP_EOL;
    }
}