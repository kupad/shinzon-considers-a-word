
let getRandom = function(l) { 
    return l[Math.floor((Math.random()*l.length))];
};

let getRandomWord = function() {
    return getRandom(words);
};

let consider = function() {
    let se = document.getElementById("shinzon-says");
    let de = document.getElementById("donatra-says");

    let sw = getRandomWord();
    let dw = getRandomWord();

    se.innerHTML = sw;
    de.innerHTML = dw;
};

document.getElementById("title-link").onclick = consider;
document.getElementById("text-link").onclick = consider;

