<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\deleteEtudiantModel;

class deleteEtudiantController implements  ControllerInterface
{
    private $idEtudiants;

    public function outputEvent()
    {
        if (isset($tabInput["VARS"]["id"])){
            $this->idEtudiants = $tabInput["VARS"]["id"];
        }
        $deleteEtudiantModel = new deleteEtudiantModel();


        if (isset($this->idEtudiants)){
            return TwigCore::getEnvironment()->render(
                'deleteEtudiant.html.twig',[
                    ]);
        }

    }
    public function inputRequest(array $tabInput)
    {
        // TODO: Implement setInput() method.

    }
}