<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;
use Quizz\Entity\Etudiant;

class etudiantModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd=DatabaseService::getConnect();
    }

    public function getFetchAll(){
        $requete=$this->bdd->prepare("SELECT * FROM etudiants");
        $requete->execute();
        $tabEtudiant=[];
        foreach ($requete->fetchAll() as $value)
        {
            $etudiant=new Etudiant($value["idEtudiant"], $value["login"], "", $value["nom"], $value["prenom"], $value["email"]);
            $tabEtudiant[]=$etudiant;
        }
        return $tabEtudiant;
    }
}