import {comparePass, validate, validatePass} from "./registration.js";
import {itemQuantity} from "./article.js";
import {closeModal, numberOfClick, clickToggle} from "./function.js";
import {clickDisplay} from "./account.js";

//When we click on "bars" we unfold or replicate the drop-down menu.
$("#bars").click(function () {
    $("#scrollMenu").slideToggle();
});

//When we click on the arrow to the right of each ray we unfold or fold the sub-rays.
clickToggle("#clickArrow1", "#menu_fruits_vegetables");
clickToggle("#clickArrow2", "#menu_salty_groceries");
clickToggle("#clickArrow3", "#menu_sweet_groceries");
clickToggle("#clickArrow4", "#menu_fresh_section");
clickToggle("#clickArrow5", "#menu_cosmetic");
clickToggle("#clickArrow6", "#menu_hygiene");
clickToggle("#clickArrow7", "#menu_well-being");
clickToggle("#clickArrow8", "#menu_house_maintenance");

// When we are on mobile, there is the button "Our store", when we click on it it shows the computer content of the store and disappears the buttons seen on mobile.
const mag = document.getElementById("magasinMobile");
if (mag){
    mag.addEventListener("click", function () {
        document.getElementById("mobile").style.display = "none";
        document.getElementById("computer").style.display = "block";
    });
}

// validation for the registration form
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

if (document.getElementById("modifyInformation")) {
    clickDisplay("modifyProfil", "contactInformation", "modifyInformation", "", "none", "flex", "");
}

if (document.getElementById("pdp")) {
    clickDisplay("clickModifyPdp", "pdp", "profilImageModify", "", "none", "flex", "");
}

if (document.getElementById("error")) {
    closeModal("error");
}

if (document.getElementById("success")) {
    closeModal("success");
}

let choice_delivery = $("#choice_delivery");
let choice_CC = $("#choice_CC");

// If input [type: radio] is checked, then it shows the click & collect of LPST.
// If the other suggestion is checked then, the click & collect of LPST disappears and gives the arrow correctly and modifies that of the other.
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
    }
});

// If input [type: radio] is checked, then it shows the standard delivery.
// If the other suggestion is checked then, the cstandard delivery disappears and gives the arrow correctly and modifies that of the other.
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
    }
});

// if standard delivery is checked, then a button appears allowing you to enter a delivery address.
let address1 = $("#address1");
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

// If input [type: radio] is checked, then it shows the form for buy with card.
// If the other suggestion is checked then, the form disappears.
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

// If input [type: radio] is checked, then it shows the button for buy with paypal.
// If the other suggestion is checked then, the button for buy with paypal disappears.
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

//Allows you to fold or unfold the content of the billing address by clicking on "billing address".
let nbClick4 = 0;
$("#billingAddress").click(function () {
    if (nbClick4 === 0) {
        $("#billingAddress2").slideDown();
        $("#billingAddress2").css({
            "display" : "flex",
            "flex-direction" : "column"
        });
        nbClick4++;
        $("#arrow3").html("<i class=\"fas fa-angle-up reverse2\"></i>");
    }
    else {
        $("#billingAddress2").slideUp();
        $("#arrow3").html("<i class=\"fas fa-angle-down reverse2\"></i>");
        nbClick4 = 0;
    }
});

//Allows you to fold or unfold the content of the delivery address by clicking on "delivery address"
let nbClick5 = 0;
$("#deliveryAddressBuy").click(function () {
    if (nbClick5 === 0) {
        $("#deliveryAddress2").slideDown();
        $("#deliveryAddress2").css({
            "display" : "flex",
            "flex-direction" : "column"
        });
        nbClick5++;
        $("#arrow3").html("<i class=\"fas fa-angle-up reverse2\"></i>");
    }
    else {
        $("#deliveryAddress2").slideUp();
        $("#arrow3").html("<i class=\"fas fa-angle-down reverse2\"></i>");
        nbClick5 = 0;
    }
});

//Condition for the total of the articles, if the total is below 50 then there is no delivery,
//if it is between 50 and 100 then it is 5 € and if it is equal to or greater than 100 € then it is free.
const subTotal = 95;
const priceDelivery = 5;
let total = subTotal;

if (document.getElementById("cart")) {
    $("#subTotal").html("Sous-total : <span class='end'><strong>" + subTotal + " €</strong></span>");
    $("#totalBuy").html("Total : <span class='end'><strong>" + total + " €</strong></span>");
    $("#choiceDelivery").click(function () {
        if ($("#checkDelivery").is(':checked')) {
            $("#standardDelivery").click(function () {
                if ($("#checkStandard").is(':checked')) {
                    if (50 <= total < 100) {
                        total = subTotal + priceDelivery;
                        $("#totalDelivery").html("Livraison : <span class=\"end\"><strong>" + priceDelivery + " €</strong></span>");
                        $("#totalBuy").html("Total : <span class='end'><strong>" + total + " €</strong></span>");
                    }
                    if (total >= 100 && subTotal >=100) {
                        total = subTotal;
                        $("#totalDelivery").html("Livraison : <span class=\"end\"><strong>Gratuit</strong></span>");
                        $("#totalBuy").html("Total : <span class='end'><strong>" + total + " €</strong></span>");
                    }
                }
            });
        }
    });
    $("#click_Collect").click(function () {
        if ($("#checkCC").is(':checked')) {
            $("#choice_CC").click(function () {
                if ($("#checkCC2").is(':checked')) {
                    $("#totalDelivery").html("Livraison : <span class=\"end\"><strong>Gratuit</strong></span>");
                    total = subTotal;
                    $("#totalBuy").html("Total : <span class='end'><strong>" + total + " €</strong></span>");
                }
            });
        }
    });

    if (total < 50) {
        document.getElementById("delivery2").style.display = "none";
    }
    if (50 <= total < 100) {
        document.getElementById("buyDelivery").innerHTML = "A partir de " +  priceDelivery + "€";
        document.getElementById("buyDelivery2").innerHTML = priceDelivery + "€"
    }
    if (total >= 100) {
        document.getElementById("buyDelivery").innerHTML = "<strong>GRATUIT</strong>";
        document.getElementById("buyDelivery2").innerHTML = "<strong>GRATUIT</strong>";
    }
}


//When filling out the form for the billing address, you can display other inputs to add information if you live in an apartment or building, by clicking on "Complements".
if (document.getElementById("complements")) {
    clickDisplay("complements", "input_complements", "complements", "", "block", "none", "");
}

//When filling out the form for the delivery address, you can display other inputs to add information if you live in an apartment or building, by clicking on "Complements".
if (document.getElementById("complements2")) {
    clickDisplay("complements2", "input_complements2", "complements2", "", "block", "none", "");
}

//When we choose an option in reserveBread.php, we click on 'validate' and the value of the option is put in the title.
let baker = document.getElementById("baker");
if (baker) {
    baker.addEventListener("change",function (){
        document.getElementById("nameBakery").innerHTML = baker.value;
        if (baker.value === "Boulangerie 1") {
            document.getElementById("choiceBread").style.display = "flex";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "none";

            document.getElementById("choiceBreadResponsive1").style.display = "block";
            document.getElementById("choiceBreadResponsive2").style.display = "none";
            document.getElementById("choiceBreadResponsive3").style.display = "none";
            document.getElementById("choiceBreadResponsive4").style.display = "none";
        }
        else if (baker.value === "Boulangerie 2") {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "flex";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "none";

            document.getElementById("choiceBreadResponsive1").style.display = "none";
            document.getElementById("choiceBreadResponsive2").style.display = "block";
            document.getElementById("choiceBreadResponsive3").style.display = "none";
            document.getElementById("choiceBreadResponsive4").style.display = "none";
        }
        else if (baker.value === "Boulangerie 3") {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "flex";
            document.getElementById("choiceBread4").style.display = "none";

            document.getElementById("choiceBreadResponsive1").style.display = "none";
            document.getElementById("choiceBreadResponsive2").style.display = "none";
            document.getElementById("choiceBreadResponsive3").style.display = "block";
            document.getElementById("choiceBreadResponsive4").style.display = "none";
        }
        else if (baker.value === "Boulangerie 4") {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "flex";

            document.getElementById("choiceBreadResponsive1").style.display = "none";
            document.getElementById("choiceBreadResponsive2").style.display = "none";
            document.getElementById("choiceBreadResponsive3").style.display = "none";
            document.getElementById("choiceBreadResponsive4").style.display = "block";
        }
        else {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "none";

            document.getElementById("choiceBreadResponsive1").style.display = "none";
            document.getElementById("choiceBreadResponsive2").style.display = "none";
            document.getElementById("choiceBreadResponsive3").style.display = "none";
            document.getElementById("choiceBreadResponsive4").style.display = "none";
        }
    });
}

if (document.getElementById("clickPhone")) {
    clickDisplay("clickPhone", "modifyPhone", "phone", "", "flex", "none", "");
}


//When we click on save in the modal window of "add a billing address", the values of the input are added in the containerBillingAddress.
//A modifier pour que ca soit grace au formulaire et que la donnée reste stocker grace a la BDD!!!!!!!!!!!!!
if ($("#staticBackdrop")) {
    $("#addBillingAddress").click(function () {
        $("#containerBillingAddress").append(
            "<div class=\"whiteBorder flexColumn inputBuy\">\n" +
                "<div class=\"flexRow align\">\n" +
                    "<p class=\"linkLog\"><strong>Nom de l'adresse</strong></p>\n" +
                    "<button id=\"modifyBillingAddressInformation\" class=\"favoriteDelete buttonClassic colorBlue edit\"><i class=\"fas fa-edit\"></i></button>\n" +
                    "<button class='buttonClassic favoriteDelete colorBlue'><i class='far fa-trash-alt'></i></button>\n" +
                "</div>\n" +
                "<span class=\"linkLog\"><strong>PRENOM NOM</strong></span>\n" +
                "<span class=\"linkLog\">Numéro + rue</span>\n" +
                "<span class=\"linkLog\">code postale + ville</span>\n" +
                "<span class=\"linkLog\">pays</span>\n" +
                "<span class=\"linkLog\">Téléphone</span>\n" +
            "</div>"
        );
    });
}

//When we click on save in the modal window of "add a delivery address", the values of the input are added in the containerBillingAddress.
//A modifier pour que ca soit grace au formulaire et que la donnée reste stocker grace a la BDD!!!!!!!!!!!!!
if ($("#modalDeliveryAddress")) {
    $("#addDeliveryAddress").click(function () {
        $("#containerDeliveryAddress").append(
            "<div class=\"whiteBorder flexColumn inputBuy\">\n" +
            "<div class=\"flexRow align\">\n" +
            "<p class=\"linkLog\"><strong>Nom de l'adresse</strong></p>\n" +
            "<button id=\"modifyBillingAddressInformation\" class=\"favoriteDelete buttonClassic colorBlue edit\"><i class=\"fas fa-edit\"></i></button>\n" +
            "<button class='buttonClassic favoriteDelete colorBlue'><i class='far fa-trash-alt'></i></button>\n" +
            "</div>\n" +
            "<span class=\"linkLog\"><strong>PRENOM NOM</strong></span>\n" +
            "<span class=\"linkLog\">Numéro + rue</span>\n" +
            "<span class=\"linkLog\">code postale + ville</span>\n" +
            "<span class=\"linkLog\">pays</span>\n" +
            "<span class=\"linkLog\">Téléphone</span>\n" +
            "</div>"
        );
    });
}

// When we click on a disconnect button, the button returns us to the disconnect.php page.
let disconnect = document.getElementsByClassName("disconnection");
if (disconnect){
    for (let i= 0 ; i < disconnect.length ; i++){
        disconnect[i].addEventListener('click',function (){
            window.location.href ="../../php/disconnect.php";
        });
    }
}

//If a customer puts a date lower than today then it sends back an alert and the value of the input becomes empty.
let today = new Date();
let date = today.toLocaleDateString();

document.getElementById("validateReservedBread").addEventListener("click", function () {
    let valueDate = new Date(document.getElementById('dateInput').value);
    let date2 = valueDate.toLocaleDateString();
    if ( date > date2) {
        alert("Hors délai");
        document.getElementById('dateInput').value = "";
    }
});



if (document.getElementById("tableBaskets") && document.getElementById("cartResponsive")){
    itemQuantity("price", "numberArticle1", "price1", "total1", "more1", "less1");
}

