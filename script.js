function wyswietl(value) {
    document.getElementById("wynik").innerHTML += value;
}

function baza() {
    var baza = document.getElementById("baza").value;
    document.getElementById("wynik").innerHTML += baza;
}

function tabela() {
    var tabela = document.getElementById("tabela").value;
    document.getElementById("wynik").innerHTML += tabela;
}

function argument1() {
    var argument1 = document.getElementById("argument").value;
    document.getElementById("wynik").innerHTML += argument1;
}

function argument2() {
    var argument2 = document.getElementById("argumentz").value;
    document.getElementById("wynik").innerHTML += argument2;
}