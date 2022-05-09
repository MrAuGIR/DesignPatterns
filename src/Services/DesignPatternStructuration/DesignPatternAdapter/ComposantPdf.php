<?php

namespace App\Services\DesignPatternStructuration\DesignPatternAdapter;

/**
 * Class representant le composant tierce de l'application
 * Sa conception est indépendante de l'application et de l'interface Document                               
 */
class ComposantPdf
{

    protected string $contenu;

    public function pdfFixeContenu(string $contenu):void{
        $this->contenu = $contenu;
    }

    public function prepareAffichage():void{
        echo "Affichage contenu PDF : Debut ".$this->contenu."<br>".PHP_EOL;
    }

    public function rafraichir():void{
        echo "Affichage contenu PDF : ".$this->contenu."<br>".PHP_EOL;
    }

    public function termineAffichage():void{
        echo "Affichage contenu PDF : Fin ".$this->contenu."<br>".PHP_EOL;
    }

    public function pdfEnvoieImprimante():void{
        echo "Impression PDF : ".$this->contenu."<br>".PHP_EOL;
    }
}