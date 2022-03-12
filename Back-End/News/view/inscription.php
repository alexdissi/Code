<!--Div contenant le Formulaire-->
<div class="form-style">
    <!--Titre du Formulaire-->
    <h2>Sign <span>Up !</span></h2>
    <form class="Formulaire" action="" method="post">
        <!--Case pour le nom-->
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom" placeholder="Jean" minlength="2" maxlength="30" required />

        <!--Case pour le prenom-->
        <label for="prenom">Entrez votre prénom : </label>
        <input type="text" name="prenom" id="prenom" placeholder="Dupont" minlength="2" maxlength="30" required />

        <!--Case pour le numero de telephone-->
        <label for="tel">Numéro de téléphone :</label>
        <input type="tel" name="tel" id="tel" placeholder="0701020304" maxlength="10" />

        <!--Case pour l'email-->
        <label for="mail">Entrez votre mail : </label>
        <input type="email" name="email" id="mail" placeholder="jeandupont@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />

        <!--Case pour le mot de passe-->
        <label for="sujet">Entrez votre mot de passe : </label>
        <input type="password" name="mdp" id="password" placeholder="**********" required />
        <!--Checkbox accepter les CGU-->
        <div class="cgu-form">
            <input type="checkbox" name="check" id="check" required />
            
                I agree to the <span>Terms of Services</span> and
                <span>Privacy Policy</span>
        </div>

        <!--Boutton Validé-->
        <button class="btnForm">
  <span class="shadow"></span>
  <span class="edge"></span>
  <span class="front text"> Inscription
  </span>
</button>
    </form>
</div>