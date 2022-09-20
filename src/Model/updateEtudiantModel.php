<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;


class updateEtudiantModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd= DatabaseService::getConnect();
    }

    public function updateEtudiant(string $nom,string $prenom,int $idEtudiant){
        $requete = $this->bdd->prepare("UPDATE etudiants
            SET nom = '".$nom."', prenom = '".$prenom."'
            WHERE idEtudiant = ". $idEtudiant.";");
        $requete->execute();
    }



}