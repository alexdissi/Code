<?php

class nomDeLaCLass 
{

/**
 * visibilité : public,private,protected
 * public = Elle est accesible de l'exterieur de la class
 * private = est accesible que dans la class elle meme
 * protected = est accesible dans la class elle meme et dans la class qui herite
 */


// Nom prenom et age sont des proprietes
 public $nom;
private $prenom;
protected $age;

public function getNom()
{
return $this -> nom;
}

public function setNom($valeur)
{
$this -> nom=$valeur;
}

public function getPrenom()
{
return $this -> prenom;
}

public function setPrenom($valeur)
{
    $this->prenom = $valeur;
}
}

// Instancier la class NomDeLaClass
$user1=new nomDeLaCLass();

echo $user1->getNom(); // Affiche rien
$user1-> setNom("Dissi"); // Set sur la proprietes $nom

echo $user1->nom; // Affiche Dissi

$user1 -> setPrenom("Alexandre");
echo $user1->getPrenom(); // Affiche Alexandre


$user2 = new nomDeLaCLass;
