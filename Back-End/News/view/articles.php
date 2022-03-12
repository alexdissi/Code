<?php if (@$sousCats) { ?>

    <nav class="navbar navbar-dark bg-danger navbar-expand-lg navbar-light ">
    <div class="container-fluid mx-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav text-center">
                <?php foreach ($sousCats as $cat) { ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?page=categorie&id=<?=$cat['id_categorie']?>"><?= $cat["nom"] ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<?php  } ?>

 


<div id="carouselExampleCaptions" class="carousel slide courouselArticle data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        
        $i = 0;
        foreach ($articles as  $article) {
            $active = $i == 0 ? 'active' : '';
        ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?> " class="<?= $active ?>"></button>
        <?php $i++;
        } ?>
    </div>
    <div class="carousel-inner">
    <?php
        $i = 0;
        foreach ($articles as  $article) {
            $active = $i == 0 ? 'active' : '';
        ?>

            <div class="carousel-item <?= $active ?>">
                <img src="<?= $article['image'] ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="index.php?page=article&id=<?php echo $article['id_article']; ?>"> <?= $article['titre'] ?></a></h5>
                </div>
            </div>

        <?php $i++;
        } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<article>

<h2 class="titre_articles">Dernier Articles :</h2>

<?php foreach ($articles as $article) { ?>
    
<div class="articles" data-aos="fade-up">

    <a class="link-danger" href="index.php?page=article&id=<?=$article['id_article']?>"
     <h2><?=$article['titre'];?></h2>
    </a>
    <p><?=$article['contenu'];?></p>
    <small><?=$article['dateCreation'];?> <?=$article['nom'];?></small>
</div>
<?php } ?> 

</article>