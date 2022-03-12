
var ccp1 = 50;
var ccp2 = 50;
var dwwm = ccp1 + ccp2;
var nom = "Alexandre";

if(dwwm>50)
{
    alert(nom+" tu as reussi");
}
else if(ccp1>=50)
{
    alert(nom+" tu as reussi le ccp1");
}
else if(ccp1===ccp2)
{
    alert(nom+ "k djcd jcd");
}
else
{
    alert(nom+" tu as raté");
}

var cpp2 = prompt("Entrer votre note cpp2 : ");
var DWWM = eval(cpp1)+eval(cpp2) ;

var nom = "Alexandre Dissi";



if (DWWM > 70){
    alert (nom + " Tu as réussi l'éxamen avec " + DWWM + "points")
}

else if (DWWM < 70){
    alert (nom + " Tu n'a pas réussi l'éxamen avec " + DWWM + " points")
}

if (cpp1 > 50){
    alert(nom + "Tu as réussi le cpp1 avec " + cpp1 + " points")
}
else if (cpp1 < 49){
    alert(nom + "Tu as loupé le cpp1 avec " + cpp1 + " points")
}


if (cpp2 > 50){
    alert(nom + "Tu as réussi le cpp2 avec " + cpp2 + " points")
}
else if (cpp2 < 49){
    alert(nom + "Tu as loupé cpp2 avec " + cpp2 +" points")
}

if (DWWM < 130){
    alert (nom + "Tu as réussi sans mention avec  " + DWWM + " points")
}

else if (DWWM > 130){
    alert (nom + "Tu as réussi avec mention " + DWWM + " points")
}


switch (a){
case "Bonjour" :
alert("je suis dans le cas BONJOUR);
break;

case "hello":
alert("je suis dans le cas HELLO");
break;

default:
alert("je suis dans aucun cas");

//equivalent avec IF
 if (a === "Bonjour") {
alert("je suis dans le cas BONJOUR");
  } else if (a == "hello") {
alert("je suis dans le cas HELLO");
 } else {
alert("je suis dans aucun cas");
 }
