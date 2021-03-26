export function clickDisplay (idClick, id1, id2, id3, display1, display2, display3) {
    document.getElementById(idClick).addEventListener("click", function () {
        document.getElementById(id1).style.display = display1;
        document.getElementById(id2).style.display = display2;
        document.getElementById(id3).style.display = display3;
    });
}

export function clickDisplay9 (idClick, id1, display1, id2, display2, id3, display3, id4, display4, id5, display5, id6, display6, id7, display7, id8, display8, id9, display9) {
    document.getElementById(idClick).addEventListener("click", function () {
        document.getElementById(id1).style.display = display1;
        document.getElementById(id2).style.display = display2;
        document.getElementById(id3).style.display = display3;
        document.getElementById(id4).style.display = display4;
        document.getElementById(id5).style.display = display5;
        document.getElementById(id6).style.display = display6;
        document.getElementById(id7).style.display = display7;
        document.getElementById(id8).style.display = display8;
        document.getElementById(id9).style.display = display9;
    });
}