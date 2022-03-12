<nav class="navbar navbar-dark bg-danger navbar-expand-lg navbar-light navbartest">
    <div class="container-fluid mx-2 mt-2 mb-2">
        <a class="navbar-brand" href="http://localhost:8888/Back-End/News/"><i class="fa-solid fa-newspaper"></i> Greta News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <?php foreach ($cats as $cat) { ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?page=categorie&id=<?=$cat['id_categorie']?>"><?= $cat["nom"] ?></a>
                </li>
                <?php } ?>
                 </ul>
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION['nom'])) { ?>
                <a class="nav-link buttonAjoutArticle" href="index.php?page=ajoutArticle"><i class="fa-solid fa-pen-to-square"></i> Ajouter Un Article</a>
                <a class="nav-link buttonAjoutArticle" href="index.php?page=ajoutArticle"><i class="fa-solid fa-pen-to-square"></i> Modifier une catagorie</a>
                <a class="nav-link" href="index.php?page=moncompte"><i class="fa-solid fa-user"></i> <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?> </a>
                <a class="nav-link" href="index.php?page=deconnexion"><i class="fa-solid fa-right-from-bracket"></i> Deconnexion</a>
                <?php } else { ?>
                <a class="nav-link" aria-current="page" href="index.php?page=connection"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                <a class="nav-link" aria-current="page" href="index.php?page=inscription"><i class="fa-solid fa-user-plus"></i> Inscription</a>
                <?php } ?>
           </ul>
        </div>
    </div>
</nav>