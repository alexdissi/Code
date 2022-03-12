<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{
/**
 * @Route("/articles", name="articles")
 */
function list(){
/**"
 * Traitement intelligent
 */


// renvoie la vue
return $this->render('article/article_list.html.twig',[

  "test" => "Bonjou koman ou ye!"
]);

}
}