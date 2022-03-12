//miltidimentions
var students = [
    ["Esat", "BYLYKBASHI", 40, "dwwm"],
    ["Ismail", "BOUJENFA", 21, "cda"],
    [
        "Diallo",
        "AMADOU",
        46,
        "doctorat"
    ],
    [
        "Djamel",
        "BOUHARIRA",
        43,
        "master"
    ]
];


// recuperation des données depuis le tableau "students" en 2 dimetions
students[2][1]; // AMADOU
students[2][2]; // 46

students.length; // 4
students[1].length; // 3

// boucles sur le tableau "students" 
// ex 1
for (let i = 0; i < students.length; i++) {
    document.querySelector(".ex1").innerHTML += '<tr><td>' + students[i][0] + '</td><td>' + students[i][1] + '</td><td>' + students[i][2] + '</td></tr>';
}


// ex 2
// je stock tout le html dans la variable ex2html
var ex2html = "";
for (let i = 0; i < students.length; i++) {
    ex2html += '<tr>';
    ex2html += '<td>' + students[i][0] + '</td>';
    ex2html += '<td>' + students[i][1] + '</td>';
    ex2html += '<td>' + students[i][2] + '</td>';
    ex2html += '</tr>';
}
document.querySelector(".ex2").innerHTML = ex2html;


// ex 3
// je stock tout le html dans la variable ex3html
var ex3html = "";
for (let i = 0; i < students.length; i++) {
    ex3html += '<tr>';
    for (let j = 0; j < students[i].length; j++) {
        ex3html += '<td>' + students[i][j] + '</td>';
    }
    ex3html += '</tr>';
}

document.querySelector(".ex3").innerHTML = ex3html;