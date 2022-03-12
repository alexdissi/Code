<?php
function nav()
{
    $navTab = ['Accueil', 'Articles', 'Contact'];

    $nav = '<ul class="nav">';

    foreach ($navTab as $val) {

        $nav .= "<li><a href='index.php?page=$val'>$val</a></li>";
    }
    $nav .= '</ul>';
    return $nav;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Greta News</h2>
    <?php echo nav(); ?>
</header>
