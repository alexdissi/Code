<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="Titre1">Exo 1 sur le PHP</h1>
    <?php

    $eleves = ["Alexandre", "Brandon", "Diallo", "Fatimé", "Mustapha", "Fanny", "Salim", "Omar", "Naceur", "Djamel", 'Ismail', "Theo"];

    function  afficheEleves($eleves)
    {
        echo ('<ul>');
        for ($i = 0; $i < count($eleves); $i++) {

            if ($eleves[$i] === "Alexandre") {
                echo ("<li>Bonjour <span style='color:green'>" . $eleves[$i] . "</span>");
            } else {
                echo ("<li>Bonjour <span style='color:red'>" . $eleves[$i] . "</span></li>");
            }
        }
        echo ('</ul>');
    }
    afficheEleves($eleves)
    ?> 
   <h2>Tableau associatif</h2> 
    <?php 
$eleves2 = [
    "diallo" => "eleve" , 
    "Mustapha" => "eleve" , 
    "Xavier" => "eleve" , 
    "Alexandre" => "eleve" , 
    "Naceur" => "eleve" , 
    "Omar" => "eleve" , 
    "Salim" => "eleve" , 
    "Fatimé" => "eleve" , 
    "Habib" => "eleve" , 
    "Djamel" => "eleve" , 
    "Ismail" => "eleve" ,  
    "Marc" => "prof" , 
    "Esat" => "prof" ,
];

$eleves2["diallo"];// Pour allez cherchercher la clé du tableau associatif

    # code .....


    function  afficheEleves2($eleves2)
    {
       echo ('<ul>');
foreach ($eleves2 as $key => $value) {

            if ($value === "eleve") {
                echo ("<li>Bonjour <span style='color:cyan'>" . $key . "</span>");
            } else {
                echo ("<li>Bonjour <span style='color:pink'>" . $key . "</span></li>");
            }
        }
        echo ('</ul>');
    }
    afficheEleves2($eleves2)
    ?>

<h2>Tableau avec Tableau associatif des eleves</h2> 

<?php

$eleves3 = [
 [
        "nom" => "Dissi",
        "prenom" => "Alexandre",
        "age" => "23",
        "genre" => "homme",
        "status"=> "eleve",
],
[
        "nom" => "Wemmert",
        "prenom" => "Xavier",
        "age" => "36",
        "genre" => "homme",
        "status"=> "eleve",
    ],
[
        "nom" => "Mejbeur",
        "prenom" => "Naceur",
        "age" => "21",
        "genre" => "homme",
        "status"=> "eleve",
    ],
 [
        "nom" => "Fatimé",
        "prenom" => "Fatimé",
        "age" => "24",
        "genre" => "femme",
        "status"=> "eleve",
    ],
[
        "nom" => "Esat",
        "prenom" => "Esat",
        "age" => "41",
        "genre" => "homme",
        "status"=> "prof",
    ],
];

function  afficheEleves3($eleves3)
{
   echo ('<ul>');
foreach ($eleves3 as $key => $value) {
echo ("<div style='color:cyan'>Nom: " . $value["nom"] . "</div><div>Prenom :" . $value["prenom"] . "</div><div>Age :" . $value["age"] . "</div><div>Genre: " . $value["genre"] . "</div>");
}
echo ("</ul>");
}

afficheEleves3($eleves3);
?>

<?php



?>

</body>

</html>