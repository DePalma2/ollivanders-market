function cambiarEstado(period) {
    var esLang = document.getElementById("esLang");
    var brLang = document.getElementById("brLang");
    var usLang = document.getElementById("usLang");
    var selector = document.getElementById("selector");

    if (period === "esLang") {
        selector.style.left = 0;
        selector.style.width = esLang.clientWidth + "px";
        selector.style.backgroundColor = "#c99900";
        selector.innerHTML = '<span class="fi fi-es"></span>';
    } else if (period === "brLang") {
        selector.style.left = esLang.clientWidth + "px";
        selector.style.width = brLang.clientWidth + "px";
        selector.innerHTML = '<span class="fi fi-br"></span>';
        selector.style.backgroundColor = "#017c2f";
    } else {
        selector.style.left = esLang.clientWidth + brLang.clientWidth + 1 + "px";
        selector.style.width = usLang.clientWidth + "px";
        selector.innerHTML = '<span class="fi fi-us"></span>';
        selector.style.backgroundColor = "#2a3a69";
    }
}

/*
COLORES:
España -> background-color: #c99900; background-color: #8c0a0f;
Brasil -> background-color: #017c2f; background-color: #cbb200; background-color: #011f5e;
Estados Unidos -> background-color: #2a3a69; background-color: #9e2c45; background-color: #f2f2f2;
*/