<?php

include_once("bdd.php");

class CategorieModel
{
    private $db;

    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function setCategorie()
    {
        $cat = $this->db->prepare("INSERT INTO categories(nom,id_parent) VALUES (?,?)");
        return $cat->execute([$this->nom, $this->id_parent]);
    }
    public function getCategories()
    {
        return $this->db->query("SELECT * FROM categories WHERE id_parent IS NULL")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllCategories()
    {
        return $this->db->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setCategorieById()
    {
        return $this->db->query("SELECT * FROM categories WHERE id_categorie={$this->id_categorie}")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSousCategories($id)
    {
        return $this->db->query("SELECT * FROM categories WHERE id_parent={$id}")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCategorie()
    {
        $cat = $this->db->query("UPDATE categories SET nom=? , id_categorie=? WHERE id_categorie=? ");
        return $cat->execute([$this->nom, $this->id_parent, $this->id_categorie]);
    }

    public function deleteCategorie()
    {
        $cat =  $this->db->query("DELETE FROM categories WHERE id_categorie=? ");
        return $cat->execute([$this->id_categorie]);
    }
}
