<?php

include_once("bdd.php");

class ArticleModel {
private $db;

public function __construct() 
{
    $this->db = Bdd::connexion();
}
public function getArticles()
{
    return $this->db->query("SELECT * FROM articles INNER JOIN categories ON articles.id_categorie=categories.id_categorie ORDER BY id_article DESC")->fetchAll(PDO::FETCH_ASSOC);
}


public function getArticlesByID()
{
    return $this->db->query("SELECT * FROM articles INNER JOIN categories ON articles.id_categorie=categories.id_categorie WHERE articles.id_article={$this->id_article}")->fetch(PDO::FETCH_ASSOC);
}

public function getArticlesByCat()
{
    return $this->db->query("SELECT * FROM articles INNER JOIN categories ON articles.id_categorie=categories.id_categorie WHERE articles.id_categorie={$this->id_categorie} OR categories.id_parent={$this->id_categorie} ORDER BY articles.id_article DESC")->fetchAll(PDO::FETCH_ASSOC);
}

public function setArticle()
{
    $query = $this->db->prepare("INSERT INTO articles(titre,contenu,image,dateCreation,id_user,id_categorie) VALUES(?,?,?,?,?,?)");
    return $query->execute([$this->titre, $this->contenu, $this->image, $this->dateAjout, $this->id_user, $this->id_categorie]);
}
public function setVue()
{
    return $this->db->query("UPDATE articles SET vue={$this->vue}");
}

}

