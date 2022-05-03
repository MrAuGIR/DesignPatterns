<?php

namespace App\Services\DesignPatternPrototype\Liasse;

class LiasseClient extends AbstractLiasse
{
    /**
     * @param string $information
     */
    public function __construct(string $information)
    {
        $liasseVierge = LiasseVierge::getInstance();
        foreach ($liasseVierge->getDocuments() as $document) {
            /** @var \App\Services\DesignPatternPrototype\Document\AbstractDocument $document */
            $copieDocument = $document->dupliqua();
            $copieDocument->remplit($information);
            $this->documents[] = $copieDocument;
        }
    }

    public function affiche():void{
        foreach ($this->documents as $document) {
            $document->affiche();
        }
    }

    public function imprime():void{
        foreach ($this->documents as $document) {
            $document->imprime();
        }
    }
}