function transform(mot) {
    const voyeles = Array.from('aeiou'); // je transforme le "string" en "tableau" grace a  Array.from()
    const motTab = Array.from(mot); // je transforme le parametre "mot" en "tableau" grace a  Array.from()

    var resultat = '';

    for (i = 0; i < motTab.length; i++) {
        if (motTab[i] != ' ') {

            if (voyeles.includes(motTab[i])) {
                resultat += motTab[i] + 'P' + motTab[i];
            } else {
                resultat += motTab[i];
            }
        } else {
            resultat += motTab[i];
        }

    }
    document.querySelector('.resultat').innerHTML += "<div>" + resultat + "</div>";
    console.log(resultat);
}

transform("Bonjour"); // Boponjopoupur

transform("Ceci est un test pour HDM"); // "Cepecipi epest upun tepest popoupur HDM"
// "Cepecipi epest upun tepest popoupur HDM"
transform("qsdfghjklm"); // "qsdfghjklm"
transform("abcdefghijklmnopqrstuvwxyz"); // "apabcdepefghipijklmnopopqrstupuvwxyz"

transform('je transforme le parametre "mot" en "tableau" grace a  Array.from()');