<?php

namespace App\Services\DesignPatternPrototype\Liasse;

abstract class AbstractLiasse 
{
    protected array $documents = [];

    /**
     * @return array
     */
    public function getDocuments():array{
        return $this->documents;
    }
} 