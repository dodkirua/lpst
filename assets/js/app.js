import {validatePass, comparePass} from "./registration.js";

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
const mag = document.getElementById("magasinMobile");
if (mag){
    mag.addEventListener("click", function () {
        document.getElementById("mobile").style.display = "none";
        document.getElementById("computer").style.display = "block";
    });
}

const regis = document.getElementById("registration");
if (regis) {
    document.getElementById("passwordRegistration").addEventListener("keyup", validatePass);
    document.getElementById("repeatPassword").addEventListener("keyup", comparePass);
    //regis.addEventListener("submit",)
}

// When I click on "my information" then the div with my information is displayed and the others are hidden.
document.getElementById("information").addEventListener("click", function () {
    document.getElementById("informationAccount").style.display = "block";
    document.getElementById("orderedAccount").style.display = "none";
    document.getElementById("baskets_favorite").style.display = "none";
});

document.getElementById("information2").addEventListener("click", function () {
    document.getElementById("informationAccount").style.display = "block";
    document.getElementById("orderedAccount").style.display = "none";
    document.getElementById("baskets_favorite").style.display = "none";
});

// When I click on "my orders" then the div with my orders is displayed and the others are hidden.
document.getElementById("ordered").addEventListener("click", function () {
    document.getElementById("informationAccount").style.display = "none";
    document.getElementById("orderedAccount").style.display = "block";
    document.getElementById("baskets_favorite").style.display = "none";
});

document.getElementById("ordered2").addEventListener("click", function () {
    document.getElementById("informationAccount").style.display = "none";
    document.getElementById("orderedAccount").style.display = "block";
    document.getElementById("baskets_favorite").style.display = "none";
});

// When I click on "my saved baskets" then the div with my saved baskets is displayed and the others are hidden.
document.getElementById("basketsSave").addEventListener("click", function () {
    document.getElementById("informationAccount").style.display = "none";
    document.getElementById("orderedAccount").style.display = "none";
    document.getElementById("baskets_favorite").style.display = "block";
});

document.getElementById("basketsSave2").addEventListener("click", function () {
    document.getElementById("informationAccount").style.display = "none";
    document.getElementById("orderedAccount").style.display = "none";
    document.getElementById("baskets_favorite").style.display = "block";
});

itemQuantity(1, "numberArticle1", "price1", "total1", "more1", "less1");
itemQuantity(2.36, "numberArticle2", "price2", "total2", "more2", "less2");
itemQuantity(4.99, "numberArticle3", "price3", "total3", "more3", "less3");




/**
 * function which allows to increase or decrease the quantity of the article while decreasing or increasing the total price.
 * @param priceArticle
 * @param idQuantity
 * @param idPrice
 * @param total
 * @param idMore
 * @param idLess
 */
function itemQuantity (priceArticle, idQuantity, idPrice, total, idMore, idLess) {
    for (let i = 0; i < 2; i++) {
        let price = priceArticle;
        let addArticle = priceArticle;
        let numberArticle1 = document.getElementsByClassName(idQuantity)[i].innerHTML;
        let valueArticle1 = Number.parseInt(numberArticle1);
        let totalPrice = document.getElementsByClassName(total)[i];
        totalPrice.innerHTML = "<strong>" + price + "€ </strong>";
        document.getElementsByClassName(idPrice)[i].innerHTML = "<strong>" + price + "€ </strong>";

        document.getElementsByClassName(idMore)[i].addEventListener("click", function () {
            totalPrice.innerHTML = "<strong>" + (price += addArticle).toFixed(2) + "€ </strong>";
            document.getElementsByClassName(idQuantity)[i].innerHTML = valueArticle1 += 1;
        });

        document.getElementsByClassName(idLess)[i].addEventListener("click", function () {
            if (document.getElementsByClassName(idQuantity)[i].innerHTML === "1" || document.getElementsByClassName(idQuantity)[i].innerHTML <= "1") {
                totalPrice.innerHTML = "<strong>" + price.toFixed(2) + "€ </strong>";
                document.getElementsByClassName(idQuantity)[i].innerHTML = 1;
            }
            else {
                document.getElementsByClassName(total)[i].innerHTML = "<strong>" + (price -= addArticle).toFixed(2) + "€ </strong>";
                document.getElementsByClassName(idQuantity)[i].innerHTML = valueArticle1 -= 1;
            }
        });
    }
}