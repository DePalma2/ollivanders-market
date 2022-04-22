function cambiarEstado(period) {
    var esLang = document.getElementById("esLang");
    var brLang = document.getElementById("brLang");
    var usLang = document.getElementById("usLang");
    var selector = document.getElementById("selector");

    if (period === "esLang") {
        selector.style.left = 0;
        selector.style.width = esLang.clientWidth + "px";
        selector.style.backgroundColor = "#c99900";
        //selector.innerHTML = "Mensuel";
    } else if (period === "brLang") {
        selector.style.left = esLang.clientWidth + "px";
        selector.style.width = brLang.clientWidth + "px";
        //selector.innerHTML = "Semestriel";
        selector.style.backgroundColor = "#017c2f";
    } else {
        selector.style.left = esLang.clientWidth + brLang.clientWidth + 1 + "px";
        selector.style.width = usLang.clientWidth + "px";
        //selector.innerHTML = "Annuel";
        selector.style.backgroundColor = "#2a3a69";
    }
}