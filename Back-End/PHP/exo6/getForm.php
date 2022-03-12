<?php
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['tel'];

function verifForm(string $type, string $test): bool
{
    $resultat = false;
    switch ($type) {
        case 'nom':
        case 'prenom':
            $resultat = preg_match("/^[a-zA-Z -]+$/", $test);
            break;
        case 'mail':
            $resultat = preg_match("/^[\w]+@[\w]{2,}\.[\w]{2,10}$/", $test);
            break;
        case 'tel':
            $resultat = preg_match("/^[0]{1}[0-9]{9}$/", $test);
            break;
    }
    return $resultat;
}

