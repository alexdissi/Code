const username = prompt("Quelle est ton nom ?");

const elementH1 = document.querySelector('h1');
const greeting = elementH1.innerHTML;

const result = greeting + " " + username;

elementH1.innerHTML = result;



const eleves = [" diallo ", " Mustapha ", " xavier ", " brandon ", " theo ", " naceur ", " Alexandre ", " Omar ", " Salim ", " Fanny ", " Fatimé ", " Habib ", " Djamel ", " Ismail "];
for (let i = 0; i < 14; i++) {
    document.querySelector('ul').innerHTML += "<li>" + eleves[i] + "</li>";
}


 
function nomdemafonction (arguments1, arguments2) {
    let some = arguments1 + arguments2
    return somme
}


//Execution
let valeur1 = "valeur1" ;
let valeur2 = "valeur2" ;
const result = nomdemafonction (valeur1, valeur2);

//Questions
//Que vaux arguments 1 ici ?



