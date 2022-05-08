<?php

namespace App\Services\DesignPatternStructuration\DesignPatternAdpater;

interface DocumentInterface
{
    public function setContenu(string $contenu):void;

    public function dessiner():void;

    public function imprimer():void;
}