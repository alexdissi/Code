

var compte = 0

function plus() {
    if (compte > 9 ) {
        compte = 10;
    }
    else {
compte++;}
document.querySelector(".compte").innerHTML = compte;

}

function moins() {
    if (compte <= 0 ) {
        compte = 0;
    }
    else {
    compte--;}
    document.querySelector(".compte").innerHTML = compte;
}




