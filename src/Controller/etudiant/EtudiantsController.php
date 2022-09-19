<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Model\etudiantModel;
use Quizz\Service\TwigService;

class EtudiantsController implements ControllerInterface
{


    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
    }

    public function outputEvent()
    {
        // TODO: Implement outputEvent() method.
        $twig = TwigService::getEnvironment();
        $etudiantModel = new etudiantModel();
        echo $twig->render('etudiant/etudiants.html.twig', [
            'etudiants' => $etudiantModel->getFetchAll()
        ]);
    }
}