<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Form\ArticleType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ArticleController extends AbstractController
{
    /**
   * @Route("/articles/create", name="create_article")
   * @ro
   */
function create(Request $request, EntityManagerInterface $manager): Response
{
$article = new Articles();

  $form = $this->createForm(ArticleType::class, $article);

$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {

  // Si $_POST est rempli
// 1. Lire les données du POST
// 2. Creer une nouvelle entité $article, la remplir avec les données 
// 3. Sauvegarde

$manager->persist($article);
$manager->flush();
// 4. Je l'affiche dans le formulaire
return $this->redirectToRoute("articles");
}

  $viewForm = $form->createView();

  return $this->render('article/create.html.twig',['viewForm' => $viewForm]);

}

  /**
   * @Route("/articles", name="articles")
   */
  function list()
  {
    /**"
     * Traitement intelligent
     */
    /** @var Article[] $articles */
    $articles = $this->getDoctrine()->getRepository(Articles::class)->findAll();

    // renvoie la vue
    return $this->render('article/article_list.html.twig', [

      'articles' => $articles,
    ]);
  }

  /**
   * @Route("/articles/{id}", name="article")
   */
  public function show($id): Response
  {
    $article = $this->getDoctrine()->getRepository(Articles::class)->find($id);
    return $this->render('article/show.html.twig', ['article' => $article]);
  }
}
