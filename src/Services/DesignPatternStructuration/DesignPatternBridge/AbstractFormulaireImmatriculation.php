<?php

namespace App\Services\DesignPatternStructuration\DesignPatternBridge;

abstract class AbstractFormulaireImmatriculation
{
    protected string $contenu;

    protected FormulaireInterface $implementation;

    public function __construct(FormulaireInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    public function affiche():void
    {
        $this->implementation->dessineTexte("numéro de la plaque existante ( ".$this->getContrainte().") :");
    }

    public function genereDocument():void{
        $this->implementation->dessineTexte('Demande d\'immatriculation');
        $this->implementation->dessineTexte("Numéro de plaque : ".$this->contenu);
    }

    public function gereSaisie():bool{
        $this->contenu = $this->implementation->gereZoneSaisie();

        return $this->controleSaisie($this->contenu);
    }

    abstract protected function controleSaisie(string $plaque):bool;

    abstract protected function getContrainte(): string;
}