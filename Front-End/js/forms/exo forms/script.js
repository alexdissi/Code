function inscription() {

    var monForm = document.forms["monFormulaire"];

    var login = monForm['login'];
    var password = monForm['password'];
    let message = document.querySelector('.message')

 if (login.value == '') {
     login.style.backgroundColor = "red";
  
 }

if (password.value == '') {
     password.style.backgroundColor = "red";
  
} 

if (login.value == 'test' && password.value == "1234") {
message.innerHTML = "conception ok";
message.classList.add('okMessage');
message.classList.remove('erreurMessage');

form.style.display = "none";

}
else {
   
    message.classList.add('erreurMessage')
    message.classList.remove('okMessage')
}
}
