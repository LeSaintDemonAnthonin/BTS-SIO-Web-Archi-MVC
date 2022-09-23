<?php

use PHPUnit\Framework\TestCase;
use Quizz\Entity\Etudiant;

final class EtudiantTest extends TestCase
{
    /**
     * @return void
     * CODE ETUD01
     */
    public function testEtu01Nom(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonneau");

        $this->assertSame(
            'Bonneau',
            $student->getNom()
        );
    }

    /**
     * @return void
     * CODE STUD02
     */
    public function testEtu02NomAvecEspace(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonneau Paul");

        $this->assertSame(
            'Bonneau Paul',
            $student->getNom()
        );
    }

    /**
     * @return void
     * CODE STUD03
     */
    public function testEtu02NomAvecCaractereSpecial(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonneau-Paul");

        $this->assertSame(
            'Bonneau-Paul',
            $student->getNom()
        );
    }

    /**
     * @return void
     * CODE STUD04
     */
    public function testEtu02NomAvecCaractereSpecialAccent(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonnéàu-Paûlï");

        $this->assertSame(
            'Bonnéàu-Paûlï',
            $student->getNom()
        );
    }
    public function testEtu01Login(): void
    {
        $student = new Etudiant();
        $student->setLogin("Bonneau");

        $this->assertSame(
            'Bonneau',
            $student->getLogin()
        );
    }

    public function testEtu02LoginAvecEspace(): void
    {
        $student = new Etudiant();
        $student->setLogin("Bonneau Paul");

        $this->assertSame(
            'Bonneau Paul',
            $student->getLogin()
        );
    }

    public function testEtu03LoginAvecCaractereSpecial(): void
    {
        $student = new Etudiant();
        $student->setLogin("Bonneau-Paul");

        $this->assertSame(
            'Bonneau-Paul',
            $student->getLogin()
        );
    }

    public function testEtu04LoginAvecCaractereSpecialAccent(): void
    {
        $student = new Etudiant();
        $student->setLogin("Bonnéàu-Paûlï");

        $this->assertSame(
            'Bonnéàu-Paûlï',
            $student->getLogin()
        );
    }
    public function testEtu05LoginAvecNombre(): void
    {
        $student = new Etudiant();
        $student->setLogin("B1");

        $this->assertSame(
            'B1',
            $student->getLogin()
        );
    }
    public function testEtu01MotDePasse(): void
    {
        $student = new Etudiant();
        $student->setMotDePasse("Bonneau");

        $this->assertSame(
            'Bonneau',
            $student->getMotDePasse()
        );
    }

    public function testEtu02MotDePasseAvecEspace(): void
    {
        $student = new Etudiant();
        $student->setMotDePasse("Bonneau Paul");

        $this->assertSame(
            'Bonneau Paul',
            $student->getMotDePasse()
        );
    }

    public function testEtu03MotDePasseAvecCaractereSpecial(): void
    {
        $student = new Etudiant();
        $student->setMotDePasse("Bonneau-Paul");

        $this->assertSame(
            'Bonneau-Paul',
            $student->getMotDePasse()
        );
    }

    public function testEtu04MotDePasseAvecCaractereSpecialAccent(): void
    {
        $student = new Etudiant();
        $student->setMotDePasse("Bonnéàu-Paûlï");

        $this->assertSame(
            'Bonnéàu-Paûlï',
            $student->getMotDePasse()
        );
    }
    public function testEtu01Prenom(): void
    {
        $student = new Etudiant();
        $student->setPrenom("Bonneau");

        $this->assertSame(
            'Bonneau',
            $student->getPrenom()
        );
    }

    public function testEtu02PrenomAvecEspace(): void
    {
        $student = new Etudiant();
        $student->setPrenom("Bonneau Paul");

        $this->assertSame(
            'Bonneau Paul',
            $student->getPrenom()
        );
    }

    public function testEtu03PrenomAvecCaractereSpecial(): void
    {
        $student = new Etudiant();
        $student->setPrenom("Bonneau-Paul");

        $this->assertSame(
            'Bonneau-Paul',
            $student->getPrenom()
        );
    }

    public function testEtu04PrenomAvecCaractereSpecialAccent(): void
    {
        $student = new Etudiant();
        $student->setPrenom("Bonnéàu-Paûlï");

        $this->assertSame(
            'Bonnéàu-Paûlï',
            $student->getPrenom()
        );
    }

    public function testEtu01Email(): void
    {
        $student = new Etudiant();
        $student->setEmail("Bonneau@o.com");

        $this->assertSame(
            'Bonneau@o.com',
            $student->getEmail()
        );
    }


    public function testEtu02EmailAvecCaractereSpecial(): void
    {
        $student = new Etudiant();
        $student->setEmail("Bonneau-Paul@i.com");

        $this->assertSame(
            'Bonneau-Paul@i.com',
            $student->getEmail()
        );
    }

    public function testEtu03EmailAvecCaractereSpecialAccent(): void
    {
        $student = new Etudiant();
        $student->setEmail("Bonnéàu-Paûlï@y.com");

        $this->assertSame(
            'Bonnéàu-Paûlï@y.com',
            $student->getEmail()
        );
    }
    public function testEtu04EmailAvecNombre(): void
    {
        $student = new Etudiant();
        $student->setEmail("B1@y.com");

        $this->assertSame(
            'B1@y.com',
            $student->getEmail()
        );
    }
    public function  testEtu01IdEtudiant(): void
    {
        $student = new Etudiant();
        $student->setIdEtudiant(666);

        $this->assertSame(
            666,
            $student->getIdEtudiant());
    }



}
