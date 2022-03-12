const studentsDWWM = [
    [
        "léponge",
        "bob",
        "5",
        "https://picsum.photos/100/100", ["auto-ecole", "pate de crabe"],
    ],
    [
        "létoiledemer",
        "patrick",
        "25",
        "https://picsum.photos/100/101", ["chomeur", "bulle de savon"],
    ],
    [
        "z",
        "dragonball",
        "105",
        "https://picsum.photos/100/102", ["boule de feu", "auto-defense"],
    ],
    [
        "han",
        "sango",
        "12",
        "https://picsum.photos/100/103", ["pleure", "étudiant"],
    ],
    [
        "han",
        "sango",
        "12",
        "https://picsum.photos/100/103", ["pleure", "étudiant"],
    ],
];


function genCards(students) {
    let cards = "";
    for (let i = 0; i < students.length; i++) {
        let currentStudent = students[i];
        const card = genCard(currentStudent);
        cards += card;
    }
    return cards;
}

function genCard(currentStudents) {
    let oneStudent = getInfo(currentStudents);
    let header = oneStudent[3];
    let content = oneStudent[0] + " ";
    content += oneStudent[1] + " ";
    content += oneStudent[4][0] + " ";
    content += oneStudent[4][1];
    let footer = oneStudent[2];
    let card = genHtmlCard(header, content, footer);

    return card;
}

function getInfo(tab) {
    let prenom = tab[0];
    let nom = tab[1];
    let age = tab[2];
    let image = tab[3];
    let metier1 = tab[4][0];
    let metier2 = tab[4][1];
    infos = [prenom, nom, age, image, [metier1, metier2]];

    return infos;
}


function genHtmlCard(header, content, footer) {
    let card = "";
    card += '<div class="card">';
    card += `<header><img src="${header}"></header>`;
    card += "<main> " + content + "</main>";
    card += "<footer> " + footer + "</footer>";
    card += "</div>";

    return card;
}

document.querySelector("div#students").innerHTML = genCards(studentsDWWM);