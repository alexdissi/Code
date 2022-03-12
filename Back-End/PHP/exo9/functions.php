<?php

function validation($type, $valeur)
{
    switch ($type) {
        case "email":
            return  preg_match("/[a-z0-9.-]+@[a-z0-9.-]{2,}\.[a-z]{2,4}/", $valeur);
            break;

        case "nom":
        case "prenom":
            return preg_match("/[a-zA-Z-]/", $valeur);
            break;
    }
}