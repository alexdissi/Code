<?php

include_once("model/articleModel.php");

class ArticleController extends ArticleModel
{

    protected $id_article;
    protected $contenu;
    protected $titre;
    protected $image;
    protected $id_user;
    protected $id_categorie;
    protected $vue;
    protected $fichier;

    public function afficheArticles()
    {
        $articles = $this->getArticles();
        include('view/articles.php');
    }

    public function afficheArticle()
    {

        $this->id_article = @$_GET["id"];
        $article = $this->getArticlesById();
        include('./view/article.php');
    }

    public function afficheArticleCat()
    {
        // Article par categories
        $this->id_categorie = $_GET['id'];
        $articles = $this->getArticlesByCat();

        include_once('model/categorieModel.php');

        // NavBar sous categorie
        $cats = new CategorieModel;
        $sousCats = $cats->getSousCategories(@$_GET["id"]);
        include('view/articles.php');
    }
    public function formArticle()
    {
include_once('./model/categorieModel.php');
        $categories = new CategorieModel;
        $cats=$categories->getAllCategories();
        include ('view/ajoutArticle.php');
    }
public function ajoutArticle()
{

    $this->id_categorie = $_POST ['id_categorie'];
    $this->titre = $_POST ['titre'];
    $this->contenu = $_POST ['contenu'];
    $this->image = $this->fileUpload();
    $this->dateAjout = $_POST ['date'];
    $this->id_user = $_SESSION ['id_user'];
  
    if ($this-> titre != '' && $this->contenu != '' && $this->id_categorie != '' && $this->dateAjout != '') {
        if ($this-> setArticle()) {
            echo '<h2>Article Ajouter</h2>'; ;
        }
    }else {
        echo '<h2>Veuiller remplir tout les champs</h2>'; ;
        $this->formArticle();
    }
}

public function fileUpload()
{
    $fichier = explode('.', $_FILES['fichier']['name']);
    $extension = end($fichier);

    $chemin = 'media/' . microtime(true) . '.' . $extension;
    $typeFichierTmp = mime_content_type($_FILES['fichier']['tmp_name']);

    $typeFichierAccepter = ['image/jpeg', 'image/png'];
    $typeExtAccepter = ["gif" , "png","jpg"];

    if (in_array($typeFichierTmp, $typeFichierAccepter)) {
        if (move_uploaded_file($_FILES['fichier']['tmp_name'], $chemin)) {
            return $chemin;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
    }
