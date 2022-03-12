<?php

include("bdd.php");

class Users
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function user()
    {

        $checkUser = $this->bdd->prepare("SELECT * FROM users");
        $checkUser->execute();
        $res = $checkUser->fetchAll(PDO::FETCH_ASSOC);

        echo ("<ul>");

        for ($i = 0; $i < count($res); $i++) {
            $utilisateur = $res[$i];
            echo ("<li>{$utilisateur['nom']} <br> {$utilisateur['prenom']} <br> {$utilisateur['email']} <br> {$utilisateur['tel']}</li>");
        }
        echo ("</ul>");
    }
}

$listUsers = new Users;
echo $listUsers->user();
