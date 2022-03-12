<?php


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];


$verifNom = false;
$veriPrenom = false;
$verifEmail = false;
$verifPassword = true;


if (validation('nom', $nom)) {
    echo "<div>nom : $nom </div>";
    $verifNom = true;
} else {
    echo "<div style='color:red'>nom : incorrect </div>";
}

if (validation('prenom', $prenom)) {
    echo "<div>nom : $prenom </div>";
    $verifPrenom = true;
} else {
    echo "<div style='color:red'>prenom : incorrect </div>";
}


if (validation('email', $email)) {
    echo "<div>email : $email </div>";
    $verifEmail = true;
} else {
    echo "<div style='color:red'>email : incorrect </div>";
}


if ($verifNom && $verifPrenom && $verifEmail && $verifPassword) {
    echo "<div>Inscription faite</div>";
    include('bdd.php');
    $insert = $bdd->prepare("INSERT INTO user(email,password,firstname,lastname) value(?,?,?,?)");

    $insert->execute([$email, $password, $nom, $prenom]);
} else {
    echo "<div style='color:red'>Attention aux erreurs</div>";
}

