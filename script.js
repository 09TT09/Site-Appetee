function addClass(id, className) {
    var element = document.getElementById(id);
    element.classList.add(className);
}

function deleteClass(id, className) {
    var element = document.getElementById(id);
    element.classList.remove(className);
}

function changeClass(id, price) {
    deleteClass('annuel', 'select')
    deleteClass('trimestriel', 'select')
    deleteClass('mensuel', 'select')
    addClass(id, 'select')
    document.getElementById('price').innerHTML = price
}

document.getElementById('annuel').addEventListener("click", function () {
    changeClass('annuel', '3.99 €')
});
document.getElementById('trimestriel').addEventListener("click", function () {
    changeClass('trimestriel', '5.99 €')
});
document.getElementById('mensuel').addEventListener("click", function () {
    changeClass('mensuel', '7.99 €')
});


function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

let windowHeight = undefined;

window.onscroll = function(e) {
    if (document.getElementById("sendTextBox")){
        if (window.scrollY <= 50) { windowHeight = -window.scrollY; }
        if (window.scrollY > 50) { windowHeight = -50; }

        document.getElementById('nav').style.marginTop = windowHeight + "px";
    }
}