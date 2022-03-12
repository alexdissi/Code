<!--Div contenant le Formulaire-->
<div class="form-style">
  <!--Titre du Formulaire-->
  <h2>Ajout d'un <span>Article</span></h2>
  <form class="Formulaire" action="" method="post" enctype="multipart/form-data">
    <select class="form-select" aria-label="Default select example" name="id_categorie">
      <?php foreach ($cats as $cat) { ?>
        <option value="<?= $cat['id_categorie'] ?>"><?= $cat['nom'] ?></option>
      <?php } ?>
    </select>
    <br>
    <!--Case pour le nom-->
    <label for="nom">Entrez le Titre : </label>
    <input type="text" name="titre" id="titre" required />
    <!--Case pour le prenom-->
    <label for="prenom">Entrez le contenu de l'article : </label>
    <textarea name="contenu" id="contenu" cols="70" rows="7" required></textarea>
    <br>
    <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="fichier">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<br>
    <label for="date">Entrez la date : </label>
    <input type="date" name="date" id="">
    <br>
    <!--Boutton Validé-->
    <button class="btnForm">
      <span class="shadow"></span>
      <span class="edge"></span>
      <span class="front text"> Ajouter un article
      </span>
    </button>
  </form>
</div>