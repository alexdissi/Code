<?php 
include("bdd.php");
$listArticle = $bdd -> prepare("SELECT titre , id_article FROM articles");
$listArticle->execute();
$res = $listArticle->fetchAll(PDO::FETCH_ASSOC);



echo ("<ol>");

for ($i = 0; $i < count($res); $i++) {
    $articles = $res[$i];
    echo ("<li><a href='index.php?page=article&id={$articles['id_article']}'>{$articles['titre']}</a></li>");
}
echo ("</ol>");



$id = @$_GET["id"];
$idArticle = $bdd->prepare("SELECT * FROM articles WHERE id_article=:idArticle");
$idArticle->bindParam(":idArticle", $id);
$idArticle->execute();
$req = $idArticle->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($req); $i++) {
    $dataArticle = $req[$i];
    echo ("<div>{$dataArticle['contenu']}</div>");
}


?>