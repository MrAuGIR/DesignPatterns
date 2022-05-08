<?php
namespace App\Services\DesignPatternPrototype\Document;

use App\Services\DesignPatternPrototype\Document\AbstractDocument;

class CertificatCession extends AbstractDocument
{
    public function affiche():void{
        echo "Affiche le certificat de cession $this->content"."<br>".PHP_EOL;
    }

    public function imprime():void
    {
        echo "Imprime le certificat de cession $this->content"."<br>".PHP_EOL;
    }
}