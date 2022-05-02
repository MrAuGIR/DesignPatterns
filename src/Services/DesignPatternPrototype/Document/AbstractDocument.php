<?php

namespace App\Services\DesignPatternPrototype\Document;

abstract class AbstractDocument
{
    protected string $content;

    public function dupliqua():self{
        return clone $this;
    }

    /**
     * @param string $informations
     */
    public function remplit(string $informations):void{
        $this->content = $informations;
    }

    abstract public function imprime():void;

    abstract public function affiche():void;
}