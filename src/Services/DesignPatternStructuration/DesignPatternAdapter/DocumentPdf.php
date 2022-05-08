<?php

namespace App\Services\DesignPatternStructuration\DesignPatternAdpater;

class DocumentPdf implements DocumentInterface
{
    protected ComposantPdf $outilPdf;

    public function __construct()
    {
        $this->outilPdf = new ComposantPdf();
    }

    public function setContenu(string $contenu): void
    {
        $this->outilPdf->pdfFixeContenu($contenu);
    }

    public function dessiner(): void
    {
        $this->outilPdf->prepareAffichage();
        $this->outilPdf->rafraichir();
        $this->outilPdf->termineAffichage();
    }

    public function imprimer(): void
    {
        $this->outilPdf->pdfEnvoieImprimante();
    }
}