<?php
class Bdd
{
    public static function connexion()
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=news", "root",  "root");
            return $bdd;
        } catch (Exception $e) {
            die("erreur de connexion à la bdd <br> $e"); // Bloque la suite du code si erreur !!
        }
    }
}

$bdd = new Bdd;
$bdd-> connexion();

$bdd2= Bdd::connexion();