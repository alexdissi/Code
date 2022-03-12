var compte = 0;

function plus() {
    if (compte >= 10) {
        compte = 10
    } else {
        compte = compte + 1;
    }
    document.querySelector(".compte").innerHTML = compte;
}

function moins() {
    if (compte <= 0) {
        compte = 0
    } else {
        compte = compte - 1;
    }
    document.querySelector(".compte").innerHTML = compte;
}

function plusMoins(type) {
    if (type == "plus") {
        if (compte2 < 10) {
            compte2 = compte2 + 1;
            document.querySelector(".compte2").innerHTML = compte2;
        }
    } else if (type == "moins") {
        if (compte2 > 0) {
            compte2 = compte2 - i;
            document.querySelector(".compte2").innerHTML = compte2
        }
    }

}

function ouvrir() {
    document.querySelector(".Fenetre").style.display = "block";
}

function reclick() {
    document.querySelector(".Fenetre").style.display = "none";
}

function ouvrir2() {
    document.querySelector(".Fenetre2").style.display = "block";
}