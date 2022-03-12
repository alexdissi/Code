<?php

require ("functions.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];


$verifNom = false;
$veriPrenom = false;
$verifEmail = false;
$verifPassword = false;


if (verifForm('nom', $nom)) {
    echo "<div>nom : $nom </div>";
    $verifNom = true;
} else {
    echo "<div style='color:red'>nom : incorrect </div>";
}

if (verifForm('prenom', $prenom)) {
    echo "<div>nom : $prenom </div>";
    $verifPrenom = true;
} else {
    echo "<div style='color:red'>prenom : incorrect </div>";
}


if (verifForm('email', $email)) {
    echo "<div>email : $email </div>";
    $verifEmail = true;
} else {
    echo "<div style='color:red'>email : incorrect </div>";
}

if (verifForm('password1', $password)) {
    echo "<div>email : $password </div>";
    $verifPassword = true;
} else {
    echo "<div style='color:red'>password : incorrect </div>";
}


if ($verifNom && $verifPrenom && $verifEmail && $verifPassword) {
    echo "<div>message envoyé</div>";

} else {
    echo "<div style='color:red'>message non envoyer </div>";
}


