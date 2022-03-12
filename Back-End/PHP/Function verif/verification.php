<?php 
$email = "aaaaa.aa";

function verifEmail($email) {
    if (preg_match("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$", $email)) {
        return true;
    } else {
        return false;
    }
}

if (verifEmail("esat@esat.fr")) {
    echo "ok";
} else {
    echo "ko";
}


echo "<br>";
if (verifEmail($email)) {
    echo "ok";
} 
