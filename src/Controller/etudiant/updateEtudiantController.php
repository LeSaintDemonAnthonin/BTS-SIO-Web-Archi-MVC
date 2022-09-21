<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\updateEtudiantModel;

class updateEtudiantController implements ControllerInterface
{
    private $idEtudiant;
    public function inputRequest(array $tabInput)
    {
        if (isset($tabInput["VARS"]["id"])){
            $this->idEtudiant = $tabInput["VARS"]["id"];
        }
        if (!empty($tabInput["POST"])){
            $this->POST = $tabInput["POST"];
            $updateEtudiantModel = new updateEtudiantModel();
            $updateEtudiantModel->updateEtudiant($this->POST["nom"]
                ,$this->POST["prenom"],$this->idEtudiant , $this->POST["email"]
                ,$this->POST["motDePasse"]);
        }
    }

    public function outputEvent()
    {


        if (isset($this->id)){
        return TwigCore::getEnvironment()->render(
                'updateEtudiant.html.twig',[
                'etudiant' => $updateEtudiantModel->getFetchId((int) $this->idEtudiant)
            ]);}

    }

}