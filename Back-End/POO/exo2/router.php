<?php

$page = @$_GET['page'];

switch ($page) {

    case 'Accueil':
        include('accueil.php');
        break;
    case 'Articles':
        include('article.php');
        break;
    case 'Contact':
        include('contact.php');
        break;
    default:
        include('accueil.php');
}