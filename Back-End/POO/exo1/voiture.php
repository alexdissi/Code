<?php

class voitures 
{
private $marque;
private $modele;

public function getMarque()
{
return $this -> marque;
}

public function setMarque($valeur)
{
$this -> marque = $valeur;
}

public function getModele()
{
return $this -> modele;
}

public function setModele($valeur)
{
$this -> modele = $valeur;
}
}

$Voiture1=new voitures;

$Voiture1-> setMarque("Ferrari");
echo $Voiture1->getMarque();

$Voiture1 -> setModele("La Ferrari");
echo $Voiture1->getModele();

?>
