<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;

class addEtudiantModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd=DatabaseService::getConnect();
    }


    public function insertEtudiant(){
        $requete=$this->bdd->prepare("INSERT INTO etudiants (login,motDePasse,nom,prenom,email)
        values ('{$_POST['login']}', '{$_POST['motDePasse']}', '{$_POST['nom']}', '{$_POST['prenom']}', '{$_POST['email']}')");
        $requete->execute();
    }
}