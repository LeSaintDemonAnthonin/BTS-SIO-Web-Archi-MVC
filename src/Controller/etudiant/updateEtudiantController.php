<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\updateEtudiantModel;

class updateEtudiantController implements ControllerInterface
{
    private $id;
    public function inputRequest(array $tabInput)
    {
        if (isset($tabInput["VARS"]["id"])){
            $this->id = $tabInput["VARS"]["id"];
        }
        if (!empty($tabInput["POST"])){
            $this->POST = $tabInput["POST"];
            $updateEtudiantModel = new updateEtudiantModel();
            $updateEtudiantModel->updateEtudiant($this->POST["nom"]
                ,$this->POST["prenom"],$this->id , $this->POST["email"]
                ,$this->POST["motDePasse"]);
        }
    }

    public function outputEvent()
    {


        if (isset($this->id)){
        return TwigCore::getEnvironment()->render(
                'updateEtudiant.html.twig',[
                'etudiant' => $updateEtudiantModel->getFetchId((int) $this->id)
            ]);}

    }

}