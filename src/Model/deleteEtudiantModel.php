<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;

class deleteEtudiantModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd=DatabaseService::getConnect();
    }

    public function deleteEtudiant(int $idEtudiant){
        $requete=$this->bdd->prepare('DELETE FROM etudiants 
            WHERE idEtudiant ='. $idEtudiant);
        $requete->execute();
    }
}


