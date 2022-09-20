<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\updateEtudiantModel;

class updateEtudiantController implements ControllerInterface
{
    public function outputEvent()
    {
        private $id;

        $add=false;
        if (isset($_POST["nom"] and $_POST["prenom"]){
            $updateEtudiantModel=new updateEtudiantModel();
            $updateEtudiantModel->updateEtudiant();
            $add=true;
        }

        if (isset($this->id)){
        return TwigCore::getEnvironment()->render(
                'etudiant/updateEtudiant.html.twig',[
                    'add'=>$add
            ]);}

    }
    public function inputRequest(array $tabInput)
    {

    }
}