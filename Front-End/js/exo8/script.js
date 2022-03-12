var nom = prompt("Entrer votre nom :");
var age = prompt("Entrer votre âge :");

if (nom= "Alexandre"){
    nom = "Acces Autoriser "
    alert(`Bonjour , ${nom}`);
}


function carreage(age) {
    const resultat = age * age ;
    return resultat
}

const resultatcarreage = carreage(age)
document.querySelector('#test').innerHTML = resultatcarreage;

// Je ferme la balise UL
document.querySelector("liste)".innerHTML +="<ul>")


// Tableau en JS

const eleves= ["Alexandre","Diallo","Mustapha","Xavier","Brandon","Theo","Omar","Salim","Fatimé","Habib","Djamel","Ismail"]

eleves [6]; //Theo

var neleves=eleves.length
for (i=0; i<neleves;i++);
eleves[i];
 