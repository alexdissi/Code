<ul>
<?php
$navBar = ["Accueil", "Services", "Contact"];

function  afficheNavBar($navBar)
{

    for ($i = 0; $i < count($navBar); $i++) {
        echo ("<li>" . $navBar[$i] . "</li>");
    }
}
afficheNavBar($navBar);
?>
</ul>