<h2>Liste des Utilisateurs</h2>

<?php
include('bdd.php');
$checkNP = $bdd->prepare("SELECT lastname, firstname FROM user");
$checkNP->execute();
$res = $checkNP->fetchAll(PDO::FETCH_ASSOC);


echo ("<ol>");

for ($i = 0; $i < count($res); $i++) {
    $eleve = $res[$i];
    echo ("<li>{$eleve['firstname']} {$eleve['lastname']} </li>");
}
echo ("</ol>");