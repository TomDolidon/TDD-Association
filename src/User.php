<?php


class User
{
    private $nom;
    private $prenom;
    private $dateNaissance;

    private function __construct($nom, $prenom, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom =$prenom;
        $this->dateNaissance = $dateNaissance;

    }

    public static function createUser($nom, $prenom, $dateNaissance){
        return new self($nom, $prenom, $dateNaissance);
    }
}