<?php

class bonjour 
{
    public $hello;
    public function __construct()
    {
$this->hello = "Bonjour Diallo";
//code
    }
}

$bla = new bonjour;

echo $bla->hello; // Affiche Bonjour Diallo



class math
{
    public $resultat;
    public function __construct($a, $b)
    {
$this->resultat = $a + $b;
//code
    }
}

$r = new math(10,20);
echo $r -> resultat; // 30