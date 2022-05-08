<?php

namespace App\Controller;

use App\Services\DesignPatternPrototype\Document\CertificatCession;
use App\Services\DesignPatternPrototype\Document\DemmandeImmatriculation;
use App\Services\DesignPatternPrototype\Document\PurchaseOrder;
use App\Services\DesignPatternPrototype\Liasse\LiasseClient;
use App\Services\DesignPatternPrototype\Liasse\LiasseVierge;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Test des differents design pattern
 */
class TestController extends AbstractController
{
    #[Route("/test/pattern/prototype", "test_design_prototype")]
    public function testPrototypeAction(Request $request){

        $liasseVierge = LiasseVierge::getInstance();

        $liasseVierge->ajoute(new PurchaseOrder());
        $liasseVierge->ajoute(new CertificatCession());
        $liasseVierge->ajoute(new DemmandeImmatriculation());

        $liasseClient = new LiasseClient('Mr anonyme');
        $liasseClient->affiche();
        $liasseClient->imprime();

        die();


    }

}