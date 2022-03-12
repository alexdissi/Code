<?php

$page = @$_GET['page'];

switch ($page) {

    case 'Accueil':
        include('accueil.php');
        break;
    case 'article':
        include('article.php');
        break;
    case 'articles&id=2':
        include('articles&id=2.php');
        break;
    default:
        include('accueil.php');
}
