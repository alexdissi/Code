// Function pour generer elements de la NavBar
const navigation = [["Accueil"], ["Formation"], ["Contact"]];

for (let i = 0; i < 3; i++) {
  document.querySelector(".nvbar").innerHTML +=
    "<li><a href='#'>" + navigation[i] + "</a></li>";

}
for (let i = 0; i < 3; i++) {
  document.querySelector(".nvbar2").innerHTML +=
    "<li><a href='#'>" + navigation[i] + "</a></li>";
}

// Funtion qui va creer un dark mode a l'appui sur l'icone darkMode
const $body = document.querySelector("body");
const darkModeButton = document.getElementById("dark-change");

document.querySelector("#dark-change").addEventListener("click", () => {
  $body.dataset.theme = $body.dataset.theme === "light" ? "dark" : "light";
  darkModeButton.classList.toggle("active");
});


// Function qui va permettre d'afficher un modal a l'appui sur un bouton
var modal = document.querySelector(".info-contact");
var modalBtn = document.querySelector(".card-button");
var closeBtn = document.querySelector(".close");

function openModal() {
  modal.style.display = "block";
}

function closeModal() {
  modal.style.display = "none";
}

function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = "none";
  }
}

modalBtn.addEventListener("click", openModal);
closeBtn.addEventListener("click", closeModal);
window.addEventListener("click", outsideClick);


// Function qui va permettre de creer un BurgerMenu fonctionnel
var burgerMenu = document.querySelector('.burger-menu')

function openBurger() {
  var divBurgerMenu = document.querySelector('.nvbar2');
  if (divBurgerMenu.style.display === "block") {
    divBurgerMenu.style.display = "none";
  }
  else {
    divBurgerMenu.style.display = "block";
  }
}

burgerMenu.addEventListener("click", openBurger);


