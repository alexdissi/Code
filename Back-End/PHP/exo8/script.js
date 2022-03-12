function verifForm(type, valeur) {
    let resultat = false;
    switch (type) {
        case 'nom':
        case 'prenom':
            resultat = /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/.test(valeur);
            break;
        case "email":
            resultat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(valeur);
            break;
            case "password1":
                resultat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)$/.test(valeur);
                break;
    }
    return resultat;

}

// fdsfdgfdgfdgfd


var password = document.getElementById("password1")
var confirm_password = document.getElementById("password2");

function validatePassword(){

if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Les mots de passe ne correspondent pas");
} else {
  confirm_password.setCustomValidity('');
}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;