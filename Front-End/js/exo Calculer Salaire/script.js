function RecupPaiement() {
    var paiement = document.querySelector("#paiement").value;
    return paiement;
}

function RecupDuree() {
    var duree = document.querySelector("#duree").value;
    return duree;
}

function Devise() {
    var devise = document.querySelector(".dev").value;
    return devise;
}


function CalculSalaire() {
    var resultat = (RecupPaiement() * RecupDuree());
    document.querySelector(".calcul").innerHTML = resultat + Devise;
}

