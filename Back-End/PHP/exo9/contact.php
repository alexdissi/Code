<h2>Contact</h2>
<div class="error"></div>
<div class="form-style">
<form action="index.php?page=setForm" method="POST" onsubmit="return sendForm()">
    Nom : <input type="text" name="nom" id="nom"><br>
    Prenom : <input type="text" name="prenom" id="prenom"><br>
    Email : <input type="text" name="email" id="email"><br>
    Passsword : <input type="password" name="password" id="password">
    <button id="send-button">Valider</button>
</div>
</form>

<?php

$mail = $_POST['email'];

