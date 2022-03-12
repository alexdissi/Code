<?php

$page = @$_GET["page"];

switch ($page) {
    case "categorie":
        include('controller/articlesController.php');
        $article = new ArticleController;
        $article->afficheArticleCat();
        break;
    case "article":
        include('controller/articlesController.php');
        $article = new ArticleController;
        $article->afficheArticle();
        break;
        case 'inscription':
            include('controller/usersController.php');
            $user = new UsersController;
    
            if (isset($_POST['email'])) {
                $user->insciption();
            } else {
                $user->formInsciption();
            }
            break;
    
        case 'connection':
            include('controller/usersController.php');
            $user = new UsersController;
    
            if (isset($_POST['email'])) {
                $user->connexion();
            } else {
                $user->formConnexion();
            }
            break;

        case "deconnexion":
                include('controller/usersController.php');
                $user = new UsersController;
                $user->deconnexion();
                break;

        case "ajoutArticle":
                include('controller/articlesController.php');
                $articles = new ArticleController;

                if (isset($_POST['titre'])) {
                    $articles->ajoutArticle();
                } else {
                    $articles->formArticle();
                }
                break;
                case "moncompte":
                include('view/moncompte.php');
                break;

                case "modifier":
                    include('controller/usersController.php');
                    $user = new UsersController;

                    if (isset($_POST['email'])) {
                        $user->UpdateInfoUser();
                    } else {
                        $user->afficheModifUser();
                    }
                    break;
    

    default:
        include('controller/articlesController.php');
        $article = new ArticleController;
        $article->afficheArticles();
}
