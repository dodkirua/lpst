//creation of LPST staff profiles
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

$(".staff").css({
    "margin" : "10px",
    "width" : "14%"
});

$(".nameStaff").css({
   "font-size" : "18px"
});

$(".jobStaff").css({
    "color" : "#489533",
});