<?php

namespace App\Services\DesignPatternStructuration\DesignPatternAdapter;

class DocumentHtml implements DocumentInterface
{
    protected string $contenu;

    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    public function dessiner(): void
    {
        echo "Dessine document HTMl : $this->contenu"."<br>".PHP_EOL;
    }

    public function imprimer():void
    {
        echo "Imprime document HTML :".$this->contenu."<br>".PHP_EOL;
    }
}