<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;
use Quizz\Entity\Etudiant;


class updateEtudiantModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd= DatabaseService::getConnect();
    }

    public function updateEtudiant(int $idEtudiant, string $login, string $motDePasse, string $nom, string $prenom, string $email){
        $requete = $this->bdd->prepare("UPDATE etudiants
            SET nom = '".$nom."', prenom = '".$prenom."', email = '".$email."', login = '".$login."',motDePasse = '".$motDePasse."'
            WHERE idEtudiant = ". $idEtudiant.";");
        $requete->execute();
    }
         public function getFetchId(int $id){
        //only get the id's data
        $requete = $this->bdd->prepare('SELECT * FROM etudiants where idEtudiant ='. $id);
        $requete->execute();
        $result = $requete->fetch();

        $etudiant = new Etudiant();
        $etudiant->setIdEtudiant($result["idEtudiant"]);
        $etudiant->setNom($result["nom"]);
        $etudiant->setPrenom($result["prenom"]);
        $etudiant->setLogin($result["login"]);

        return $etudiant;
    }




}