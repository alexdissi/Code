function inscription() {

    var monForm = document.forms["monFormulaire"];

    var nom = monForm['nom'];
    var prenom = monForm['prenom'];

 if (nom.value == '') {
     nom.style.backgroundColor = "red";
  
 }

if (prenom.value == '') {
     prenom.style.backgroundColor = "red";
  
} 

    return false;
}

function veriflogin(){
    const user = "login";
    const password = "password";
    const InputUser = prompt("nom?");
    const InputPassword = prompt("mdp?");

    if (user == "alexandre" && password == 1234){
        alert ("ok")
    }
    else{
        alert("non connecté");
        
    }
}