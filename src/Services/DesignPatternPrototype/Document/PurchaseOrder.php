<?php
namespace App\Services\DesignPatternPrototype\Document;

use App\Services\DesignPatternPrototype\Document\AbstractDocument;

class PurchaseOrder extends AbstractDocument
{
    public function affiche():void{
        echo "Affiche bon de commande $this->content"."<br>".PHP_EOL;
    }

    public function imprime():void
    {
        echo "Imprime le bon de commande $this->content"."<br>".PHP_EOL;
    }
}