<?php 

$page = @$_GET['page'];
switch($page)
{
    case 'acceuil';
    include('accueil.php');
    break;
    case 'service';
    include('service.php');
    break;
    case 'contact';
    include('contact.php');
    break;
    default:;
    include('accueil.php');
}