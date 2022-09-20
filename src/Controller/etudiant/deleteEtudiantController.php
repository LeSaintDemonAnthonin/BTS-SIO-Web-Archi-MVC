<?php

namespace Quizz\Controller\etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;
use Quizz\Model\deleteEtudiantModel;

class deleteEtudiantController implements  ControllerInterface
{
    private $delete;

    public function outputEvent()
    {
        $deleteEtudiantModel = new deleteEtudiantModel();


        if (isset($this->id)){
            return TwigCore::getEnvironment()->render(
                'deleteEtudiant.html.twig',[
                    ]);
        }
        if ($this->delete == true){
            header('Location:/etudiant');
        }
    }
}