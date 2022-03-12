/**
 * cree un menu a partir du tableau js
 * avec css svp
 */



var menu = [
    ["Experences", "#E"],
    ["Formations", "#F"],
    ["Competences", "#C"],
    ["Contact", "#Contact"]
];

var menuHtml = "";
for (let i = 0; i < menu.length; i++) {
    menuHtml += '<li><a href="' + menu[i][1] + '">' + menu[i][0] + '</a></li>';

}

document.querySelector(".menu").innerHTML = menuHtml;

