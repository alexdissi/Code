<div class="moncompte">

    <h1><i class="fa-solid fa-user"></i> Mon Compte :</h1>
    <div class="infoMonCompte">
        <h3>Nom: </h3>
        <h3> <?= $_SESSION['nom'] ?></h3>
    </div>
    <div class="infoMonCompte">
        <h3>Prenom: </h3>
        <h3> <?= $_SESSION['prenom'] ?></h3>
    </div>
    <div class="infoMonCompte">
        <h3>E-mail: </h3>
        <h3> <?= $_SESSION['email'] ?></h3>
    </div>
    <div class="infoMonCompte">
        <h3>Numero de telephone: </h3>
        <h3> <?= $_SESSION['tel'] ?></h3>
    </div>
    <div class="infoMonCompte">
        <button class="btnForm">
            <span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text"><a class="nav-link link-light" href="index.php?page=modifier"> Modifier mes informations
            </span></a>
        </button>
    </div>
</div>