<!--Div contenant le Formulaire-->
<div class="form-style">
    <!--Titre du Formulaire-->
    <h2>Modifier mon<span> Compte !</span></h2>
    <form class="Formulaire" action="" method="post">
        <!--Case pour le nom-->
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom" value="<?= $_SESSION['nom']?>"/>

        <!--Case pour le prenom-->
        <label for="prenom">Entrez votre prénom : </label>
        <input type="text" name="prenom" id="prenom" value="<?= $_SESSION['prenom']?>" />

        <!--Case pour le numero de telephone-->
        <label for="tel">Numéro de téléphone :</label>
        <input type="tel" name="tel" id="tel" value="<?= $_SESSION['tel']?>" />

        <!--Case pour l'email-->
        <label for="mail">Entrez votre mail : </label>
        <input type="email" name="email" id="mail" value="<?= $_SESSION['email']?>" />

        <!--Boutton Validé-->
        <button class="btnForm"">
  <span class="shadow"></span>
  <span class="edge"></span>
  <span class="front text"> Modifier
  </span>
</button>
    </form>
</div>