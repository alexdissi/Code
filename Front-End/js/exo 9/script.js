
/** 
 * 
 * creer un tableau eleves avec pour données
 * afficher dans une liste UL
 * L'eleve 5 a 7 mettre en rouge
 * les eleves a partir de 8 mettre en bleu

**/


const eleves = ["Ismail", "Dialo", "Mustapha", "Djamel", "Xavie", "Habib", "Brandon", "Fatimé", "Fanny", "Théo"];
console.log(eleves.length);

for (i = 0; i < eleves.length; i++) {

    if (i >= 4 && i <= 6) {
        document.querySelector(".listeEleves").innerHTML += "<li style='color:red'>" + eleves[i] + "</li>";
    } else if (i >= 7) {
        document.querySelector(".listeEleves").innerHTML += '<li style="color:blue">' + eleves[i] + '</li>';
    } else {
        document.querySelector(".listeEleves").innerHTML += "<li >" + eleves[i] + "</li>";
    }

}


