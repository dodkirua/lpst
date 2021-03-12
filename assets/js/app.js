import {validate, compare} from "./password.js";

//creation of LPST staff profiles.
let organizationalChart = [
    {"photo" : "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png", "fisrtname" : "Prénom", "lastname" : "Nom", "job" : "Travail"},
    {"photo" : "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png", "fisrtname" : "Prénom", "lastname" : "Nom", "job" : "Travail"},
    {"photo" : "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png", "fisrtname" : "Prénom", "lastname" : "Nom", "job" : "Travail"},
    {"photo" : "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png", "fisrtname" : "Prénom", "lastname" : "Nom", "job" : "Travail"},
    {"photo" : "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png", "fisrtname" : "Prénom", "lastname" : "Nom", "job" : "Travail"},
    {"photo" : "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png", "fisrtname" : "Prénom", "lastname" : "Nom", "job" : "Travail"},
];

for (let i = 0; i < organizationalChart.length; i++) {
    $("#containerStaff").append(
        "<div class='staff flexColumn flexCenter'>" +
            "<img class='staffPhoto' src='" + organizationalChart[i].photo +"'>" +
            "<p class='nameStaff colorBlue'>" + organizationalChart[i].fisrtname + " " + organizationalChart[i].lastname.toUpperCase()  + " </p>" +
            "<p class='jobStaff'> " + organizationalChart[i].job + "</p>" +
        "</div>"
    )
}

//display the drop-down menu by clicking on the menu icon and disappear by also clicking on the menu icon.
let nbClick = 0;
$("#menuResponsive").click(function () {
    if (nbClick === 0) {
        $("#scrollMenu").css("display", "flex");
        nbClick++;
    }
    else {
        $("#scrollMenu").css("display", "none");
        nbClick = 0;
    }
});

document.getElementById("magasinMobile").addEventListener("click", function () {
    document.getElementById("mobile").style.display = "none";
    document.getElementById("computer").style.display = "block";
})

document.getElementById("passwordRegistration").addEventListener("keypress", validate);
document.getElementById("repeatPassword").addEventListener("keypress", compare);



