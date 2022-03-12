let produit = [
    ["Produit 1", 10],
    ["Produit 2", 30],
    ["Produit 3", 100],
    ["Produit 4", 180],
    ["Produit 5", 80],
    ["Produit 6", 50],
];


function produits(tab) {
    let tr = "";
    for (i = 0; i < tab.length; i++) {

        tr += "<tr>";
        tr += "<td>" + tab[i][0] + "</td>";
        tr += "<td>" + tab[i][1] + "$</td>";
        tr += "<td><button onclick='ajouterPanier(" + i + ");'>ajouter au panier</button></td>";
        tr += "</tr>";
    }
    document.querySelector(".listeProduits").innerHTML = tr;
}

produits(produit);

function ajouterPanier(a) {

var nomProduits = produit [a][0];
var prixProduits = produit[a][1];
document.querySelector(".panier").innerHTML += nomProduits + " : " + prixProduits + "$<br>";


}
 
 
