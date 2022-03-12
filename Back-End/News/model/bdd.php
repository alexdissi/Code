<?php
class Bdd {
    public static function connexion()
    {
try {
$bdd = new PDO("mysql:host=localhost;port=3306;dbname=news", "root",  "root");
return $bdd;
} catch (\Throwable $th) {
  die('Probleme de connexion a la BDD : $th' );
}
    }
}

$db = Bdd::connexion();