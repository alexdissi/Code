<?php

include("./model/categorieModel.php");

class CategoriesController extends CategorieModel
{
protected $id_categorie;
protected $nom;
protected $id_parent;

public function afficheCategories()
{
    $cats = $this->getCategories();

    include("view/categories.php");
}

}