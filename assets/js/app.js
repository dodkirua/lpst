import {validatePass, comparePass, validate} from "./registration.js";
import {itemQuantity} from "./article.js";
import {closeModal} from "./function.js";

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
    regis.addEventListener("submit",function (e){
        e.preventDefault();
        if(validate()){
            regis.submit();
        }

    });
}

// When I click on "my information" then the div with my information is displayed and the others are hidden.
if (document.getElementById("informationAccount")) {
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
}



// When I click on "my orders" then the div with my orders is displayed and the others are hidden.
if (document.getElementById("orderedAccount")) {
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
}
// When I click on "my saved baskets" then the div with my saved baskets is displayed and the others are hidden.
if (document.getElementById("basketsSave")) {
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
}

if (document.getElementById("modifyInformation")) {
    document.getElementById("modifyProfil").addEventListener("click", function () {
        document.getElementById("contactInformation").style.display = "none";
        document.getElementById("modifyInformation").style.display = "flex";
    });
}

if (document.getElementById("error")) {
    closeModal("error")
}

if (document.getElementById("success")) {
    closeModal("success")
}

let choice_delivery = $("#choice_delivery");
let choice_CC = $("#choice_CC");

let nbClick2 = 0;
$("#click_Collect").click(function () {
    if ($("#checkCC").is(':checked')) {
        if (nbClick2 === 0) {
            choice_CC.css("display", "flex");
            nbClick2++;
            if (choice_delivery.css("display", "block")) {
                choice_delivery.css("display", "none");
                $("#arrow1").html("<i class=\"fas fa-angle-up reverse\"></i>");
                $("#arrow2").html("<i class=\"fas fa-angle-down reverse\"></i>");
                nbClick2 = 0;
            }
        }
        else {
            choice_CC.css("display", "none");
            nbClick2 = 0;
        }
    }
});

let nbClick3 = 0;
$("#choiceDelivery").click(function () {
    if ($("#checkDelivery").is(':checked')) {
        if (nbClick3 === 0) {
            choice_delivery.css("display", "block")
            nbClick3++;
            if (choice_CC.css("display", "flex")) {
                choice_CC.css("display", "none");
                $("#arrow2").html("<i class=\"fas fa-angle-up reverse\"></i>");
                $("#arrow1").html("<i class=\"fas fa-angle-down reverse\"></i>");
                nbClick3 = 0;
            }
        }
        else {
            choice_delivery.css("display", "none");
            nbClick3 = 0;
        }
    }
});

let address1 = $("#address1");
let address2 = $("#address2");

if ($("#standardDelivery")) {
    let nbClick = 0;
    $("#standardDelivery").click(function () {
        if ($("#checkStandard").is(':checked')) {
            if (nbClick === 0) {
                address1.css("display", "block")
            }
        }
    });
}

if ($("#buyCards")) {
    let nbClick = 0;
    $("#buyCards").click(function () {
        if ($("#checkAllCards").is(':checked')) {
            if (nbClick === 0) {
                $("#choice_Cards").css("display", "flex")
                nbClick++;
                if ($("#choice_paypal").css("display", "flex")) {
                    $("#choice_paypal").css("display", "none");
                    nbClick = 0;
                }
            }
        }
    });
}

if ($("#paypalBuy")) {
    let nbClick = 0;
    $("#paypalBuy").click(function () {
        if ($("#checkPaypal").is(':checked')) {
            if (nbClick === 0) {
                $("#choice_paypal").css("display", "flex")
                nbClick++;
                if ($("#choice_Cards").css("display", "flex")) {
                    $("#choice_Cards").css("display", "none");
                    nbClick = 0;
                }
            }
        }
    });
}

let nbClick4 = 0;
$("#billingAddress").click(function () {
    if (nbClick4 === 0) {
        $("#billingAddress2").css("display", "flex");
        nbClick4++;
        $("#arrow3").html("<i class=\"fas fa-angle-up reverse2\"></i>");
    }
    else {
        $("#billingAddress2").css("display", "none");
        $("#arrow3").html("<i class=\"fas fa-angle-down reverse2\"></i>");
        nbClick4 = 0;
    }
});

//Condition for the total of the articles, if the total is below 50 then there is no delivery,
//if it is between 50 and 100 then it is 5 € and if it is equal to or greater than 100 € then it is free.
let totalBuy = document.getElementById("totalBuy").innerHTML = 145;
if (totalBuy < 50) {
    document.getElementById("delivery2").style.display = "none";
}
if (50 <= totalBuy < 100) {
    document.getElementById("buyDelivery").innerHTML = "A partir de " +  5 + "€";
    document.getElementById("buyDelivery2").innerHTML = 5 + "€";

}
if (totalBuy >= 100) {
    document.getElementById("buyDelivery").innerHTML = "<strong>GRATUIT </strong>";
    document.getElementById("buyDelivery2").innerHTML = "<strong>GRATUIT </strong>";
}



if (document.getElementById("complements")) {
    document.getElementById("complements").addEventListener("click", function () {
        document.getElementById("input_complements").style.display = "block";
        document.getElementById("complements").style.display = "none";
    });
}

if (document.getElementById("complements2")) {
    document.getElementById("complements2").addEventListener("click", function () {
        document.getElementById("input_complements2").style.display = "block";
        document.getElementById("complements2").style.display = "none";
    });
}

if (document.getElementsByClassName("numberArticle")){
    itemQuantity(1, "numberArticle1", "price1", "total1", "more1", "less1");
    itemQuantity(2.36, "numberArticle2", "price2", "total2", "more2", "less2");
    itemQuantity(4.99, "numberArticle3", "price3", "total3", "more3", "less3");
}





