<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=exo9", "root",  "root");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection BDD OK" ;
} catch (Exception $e) {
    die("erreur de connexion à la bdd <br> $e"); // Bloque la suite du code si erreur !!
}
 