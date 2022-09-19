<?php

namespace Quizz\Controller\etudiant;

use Quizz\Model\addEtudiantModel;
use Quizz\service\TwigService;
use Quizz\Core\Controller\ControllerInterface;

class addEtudiantController implements ControllerInterface
{
    public function outputEvent() {
        $add=false;
        if (isset($_POST["login"]) and $_POST["motDePasse"] and $_POST["nom"] and $_POST["prenom"] and $_POST["email"] ){
            $addEtudiantModel=new addEtudiantModel();
            $addEtudiantModel->insertEtudiant();
            $add=true;
        }

        // TWIG
        $twig = TwigService::getEnvironment();
        // Obj connect Mysql -> Obj Questionnaire
        $addEtudiantModel = new addEtudiantModel();
        // je teste la variable GET /?id
        echo $twig->render('etudiant/addEtudiant.html.twig', [
            //'addEtudiant' => $addEtudiantModel->insertEtudiant(),
            'add'=>$add
        ]);
    }

    public function inputRequest(array $tabInput)
    {
        // TODO: Implement setInput() method.

    }
}