<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=test", "root",  "root");

    echo "connection BDD OK" ;
} catch (Exception $e) {
    die("erreur de connexion à la bdd <br> $e"); // Bloque la suite du code si erreur !!
}
