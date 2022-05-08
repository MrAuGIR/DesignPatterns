<?php

namespace App\Services\DesignPatternStructuration\DesignPatternAdapter;

interface DocumentInterface
{
    public function setContenu(string $contenu):void;

    public function dessiner():void;

    public function imprimer():void;
}