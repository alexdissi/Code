<?php

include("./model/categorieModel.php");

class NavBarController extends CategorieModel
{

public function navBar()
{
    $cats = $this->getCategories();
    include("./view/navBar.php");
}


}