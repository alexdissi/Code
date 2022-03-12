/** d'abord  je creer le tableau avec la liste des eleves 
ensuite je creer dans mon HTML des cards qui contiendrons par la suite les differents eleves , 
eensuite je creer une const dans le JS qui contiendras le nom des differents eleves 


**/ 

const studentsDWWM = [
    ["léponge", "bob", "5", "https://profile"],
    ["létoiledemer", "patrick", "25", "https://profile"],
    ["z", "dragonball", "105", "https://profile"],
    ["han", "sango", "12", "https://profile"],
]

function genCards(students) {

}

function genCard(student) {}

function getStudentInfos(student) {}

function genHtmlCard(header, content, footer) {}

document.querySelector("div#students").innerHTML = genCards(studentsDWWM);


/**
 * 
 * @param {Array} students Tableau de tableaux [ [nom, prenom, age, avatar], ]
 * @returns {string} Le html de toutes les cards de tous les étudiants
 */
 function genCards(students) {
    let cards = "";
    for (let i = 0; i < students.length; i++) {
        let currentStudent = students[i];
        const card = genCard(currentStudent);
        cards += card;
    }
    return cards;
}

/**
 * 
 * @param {Array} student [nom, prenom, age, avatar]
 * @returns {string} La card html pour un étudiant
 */
function genCard(student) {}

function getStudentInfos(student) {}

function genHtmlCard(header, content, footer) {}
document.querySelector("div#students").innerHTML = genCards(studentsDWWM);

for (let i = 0; i < studentsDWWM.length; i++) {
    document.querySelector("#avatars").innerHTML += "<img src='" + studentsDWWM[i][3] + "'/>";
}




const eleves = ["sangoku"];
/**
 * 
 * @param {Array} eleves 
 * @param {string} texte 
 */
function salutation(eleves, texte) {
    //let nom = "Mustapha";
    for (let i = 0; i < eleves.length; i++) {
        let nom = eleves[i];
        alert(texte + " " + nom);
    }
}
const elevesDWWM = ["Mustapha", "Diallo", "Xavier"];
salutation(elevesDWWM, "bonjour");