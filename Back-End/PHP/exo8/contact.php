<h2>Contact</h2>
 <!--Div contenant le Formulaire-->
 <div class="form-style">
      <!--Titre du Formulaire-->
      <h2>Inscrivez<span>Vous !</span></h2>
      <form class="Formulaire" action="index.php?page=setForm" method="POST" onsubmit="return sendForm()">
        <!--Case pour le nom-->
        <label for="nom">Entrez votre nom : </label>
        <input
          type="text"
          name="nom"
          id="nom"
          placeholder="Jean"
          minlength="3"
          pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"
          required
        />

        <!--Case pour le prenom-->
        <label for="prenom">Entrez votre prénom : </label>
        <input
          type="text"
          name="prenom"
          id="prenom"
          placeholder="Dupont"
          minlength="3"
          pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"
          required
        />


        <!--Case pour l'email-->
        <label for="mail">Entrez votre mail : </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="NaceurBootstrap@greta.com"
          pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$"
          required
        />

        <!--Case pour le mot de passe-->
        <label for="sujet">Entrez votre mot de passe : </label>
        <input
          type="password"
          name="passsword1"
          id="password1"
          placeholder="**********"
          pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
          required
        />

        <!--Case pour la verification du mot de passe-->
        <label for="sujet">Verification de votre mot de passe : </label>
        <input
          type="password"
          name="passsword2"
          id="password2"
          placeholder="**********"
          required
/>
       <button id="send-button">Envoyer</button>
      </form>
    </div>
<script src="script.js"></script>