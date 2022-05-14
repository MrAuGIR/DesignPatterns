<?php

namespace App\Controller;

use App\Services\DesignPatternPrototype\Document\CertificatCession;
use App\Services\DesignPatternPrototype\Document\DemandeImmatriculation;
use App\Services\DesignPatternPrototype\Document\PurchaseOrder;
use App\Services\DesignPatternPrototype\Liasse\LiasseClient;
use App\Services\DesignPatternPrototype\Liasse\LiasseVierge;
use App\Services\DesignPatternStructuration\DesignPatternAdapter\DocumentHtml;
use App\Services\DesignPatternStructuration\DesignPatternAdapter\DocumentPdf;
use App\Services\DesignPatternStructuration\DesignPatternBridge\FormHtml;
use App\Services\DesignPatternStructuration\DesignPatternBridge\FormImmatriculationFrance;
use App\Services\DesignPatternStructuration\DesignPatternBridge\FormImmatriculationLuxembourg;
use App\Services\DesignPatternStructuration\DesignPatternBridge\FormQt;
use App\Services\DesignPatternStructuration\DesignPatternComposite\SocieteMere;
use App\Services\DesignPatternStructuration\DesignPatternComposite\SocieteSansFiliale;
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
        $liasseVierge->ajoute(new DemandeImmatriculation());

        $liasseClient = new LiasseClient('Mr anonyme');
        $liasseClient->affiche();
        $liasseClient->imprime();

        die();
    }

    #[Route("/test/pattern/adapter", "test_design_adapter")]
    public function testAdapterAction(Request $request){
        $documentHtml = new DocumentHtml();
        $documentHtml->setContenu("HELLO WORLD");
        $documentHtml->dessiner();

        $documentPdf = new DocumentPdf();
        $documentPdf->setContenu("Bonjour");
        $documentPdf->dessiner();

        die();
    }

    #[Route("/test/pattern/bridge","test_design_bridge")]
    public function testBridgeAction(Request $request){

        $formulaireFrance = new FormImmatriculationFrance(new FormHtml());
        $formulaireLuxembourg = new FormImmatriculationLuxembourg(new FormQt());

        $formulaireFrance->affiche();
        if($formulaireFrance->gereSaisie()){
            $formulaireFrance->genereDocument();
        }

        $formulaireLuxembourg->affiche();
        if($formulaireLuxembourg->gereSaisie()){
            $formulaireLuxembourg->genereDocument();
        }
        die();
    }

    #[Route("/test/pattern/composite","test_design_composite")]
    public function testCompositeAction(Request $request){

        $societe1 = new SocieteSansFiliale();
        $societe1->ajouteVehicule();

        $societe2 = new SocieteSansFiliale();
        $societe2->ajouteVehicule();
        $societe2->ajouteVehicule();

        $group = new SocieteMere();
        $group->ajouteFiliale($societe1);
        $group->ajouteFiliale($societe2);
        $group->ajouteVehicule();

        $coutEntretien = number_format($group->calculCoutEntretien(),2,","," ");

        echo sprintf("Coût entretien total du groupe : %s ".PHP_EOL,$coutEntretien);
        die();
    }
}