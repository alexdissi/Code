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
    
<div class="background">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>

<nav>
    <p>Logo</p>
<?php


$navBar = ["Accueil", "Services", "Contact"];

function  afficheNavBar($navBar)
{
    echo ('<ul>');
    for ($i = 0; $i < count($navBar); $i++) {
        echo ("<li>" . $navBar[$i] . "</li>");
    }
    echo ('</ul>');
}
afficheNavBar($navBar)
?>

</nav>

</body>
</html>