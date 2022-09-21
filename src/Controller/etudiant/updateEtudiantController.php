<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\updateEtudiantModel;

class updateEtudiantController implements ControllerInterface
{
    private $idEtudiant;
    private $postData;
    public function inputRequest(array $tabInput)
    {
       /* var_dump($tabInput);
        var_dump($tabInput["VARS"]["id"]);*/
        if (isset($tabInput["VARS"]["id"])){
            $this->idEtudiant = $tabInput["VARS"]["id"];
        }
        if (!empty($tabInput["POST"])){
            $this->postData = $tabInput["POST"];
        }


    }

    public function outputEvent()
    {


        if (isset($this->idEtudiant)){
            $updateEtudiantModel = new updateEtudiantModel();
        return TwigCore::getEnvironment()->render(
                '/etudiant/updateEtudiant.html.twig',[
                'etudiant' => $updateEtudiantModel->getFetchId((int) $this->idEtudiant)
            ]);
        }

    }
}