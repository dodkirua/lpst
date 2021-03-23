export function clickDisplay (idClick, id1, id2, id3, display1, display2, display3) {
    document.getElementById(idClick).addEventListener("click", function () {
        document.getElementById(id1).style.display = display1;
        document.getElementById(id2).style.display = display2;
        document.getElementById(id3).style.display = display3;
    });
}