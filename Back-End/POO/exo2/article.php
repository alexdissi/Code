<h3>Latest News :</h3>

<?php

include("bdd.php");

class Articles
{
    private $bdd;

    private $id_article;
    private $titre;
    private $nom;
    private $contenu;
    private $dateCreation;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getId_article()
    {
        return $this->id_article;
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getContenu()
    {
        return $this->contenu;
    }
    public function setConteu($contenu)
    {
        $this->titre = $contenu;
        return $this;
    }
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function article()
    {

        $checkArticle = $this->bdd->prepare("SELECT * FROM articles INNER JOIN categories ON articles.id_categorie = categories.id_categorie INNER JOIN users ON articles.id_user = users.id_user ORDER BY id_article DESC");
        $checkArticle->execute();
        $res = $checkArticle->fetchAll(PDO::FETCH_ASSOC);

        foreach ($res as $value) {
            echo ("<div class='article'><h2 id='titreArticle'>{$value['nom']}: {$value['titre']}</h2><p id='contenuArticle'>{$value['contenu']}</p>
            <div id='dateArticle'>{$value['dateCreation']}<div class='auteur'>{$value['prenom_users']} {$value['nom_users']}</div></div></div>");
        }
    }
}

$listArticle = new Articles;
echo $listArticle->article();
