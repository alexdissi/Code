<?php 

require_once('../bdd.php');

$sqlCreateTable = "CREATE TABLE user (
    id INT(4) AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    lastname  VARCHAR(255) NOT NULL,
    firstname  VARCHAR(255)
)
";
echo ("<ol><li>Création de la table user.</li>");

try {
$bdd->exec($sqlCreateTable);
echo ('<li>table créée OK</li>');
} catch (\Throwable $th) {
echo ("<li>{$th->getMessage()}</li>");
}
echo ("</ol>");