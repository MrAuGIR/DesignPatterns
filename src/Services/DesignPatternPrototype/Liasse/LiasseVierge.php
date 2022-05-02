<?php

namespace App\Services\DesignPatternPrototype\Liasse;

use App\Services\DesignPatternPrototype\Document\AbstractDocument;

class LiasseVierge extends AbstractLiasse
{
    private static ?self $instance = null;

    public static function getInstance():self
    {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @param AbstractDocument $document
     */
    public function ajoute(AbstractDocument $document):void
    {
        $this->documents[] = $document;
    }

    public function retire(AbstractDocument $document):void
    {
        if(false !== ($index = array_search($document,$this->documents,true))){
            unset($this->documents[$index]);
        }
    }
}