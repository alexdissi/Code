const cadeaux = ['iPhone', 'Tesla', 'iPad', 'TV 4K']


function listGift(gift) {
    for (let i = 0; i < gift.length; i++) {
        cadeauxHTML += '<li>' + gift[i] + '</li>';
    }
    cadeaux += '</ul>'
    document.querySelector('.list').innerHTML = cadeaux
}
listeGift(gift)

function 