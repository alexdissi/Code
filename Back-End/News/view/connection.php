<!--Div contenant le Formulaire-->
<div class="form-style">
<form class="Formulaire" action="" method="post">
    <!--Titre du Formulaire-->
    <h2>Sign <span>In !</span></h2>

        <!--Case pour l'email-->
        <label for="mail">Entrez votre mail : </label>
        <input type="email" name="email" id="mail" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />

        <!--Case pour le mot de passe-->
        <label for="sujet">Entrez votre mot de passe : </label>
        <input type="password" name="mdp" id="password" placeholder="Password" required />

       <!--Boutton Validé-->
       <button class="btnForm">
  <span class="shadow"></span>
  <span class="edge"></span>
  <span class="front text"> Connexion
  </span>
</button>
    </form>
</div>