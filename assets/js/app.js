import {comparePass, validate, validatePass} from "./registration.js";
import {itemQuantity} from "./article.js";
import {closeModal, numberOfClick} from "./function.js";
import {clickDisplay} from "./account.js";



//display the drop-down menu by clicking on the menu icon and disappear by also clicking on the menu icon.
numberOfClick("#menuResponsive", "#scrollMenu");

//display a drop-down menu for each category of departments and disappear by clicking on the arrow.
numberOfClick("#clickArrow1", "#menu_fruits_vegetables");
numberOfClick("#clickArrow2", "#menu_salty_groceries");
numberOfClick("#clickArrow3", "#menu_sweet_groceries");
numberOfClick("#clickArrow4", "#menu_fresh_section");
numberOfClick("#clickArrow5", "#menu_cosmetic");
numberOfClick("#clickArrow6", "#menu_hygiene");
numberOfClick("#clickArrow7", "#menu_well-being");
numberOfClick("#clickArrow8", "#menu_house_maintenance");


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

// When I click on "my information" then the div with my information is displayed and the others are hidden.
if (document.getElementById("informationAccount")) {
    clickDisplay("information", "informationAccount", "orderedAccount", "baskets_favorite", "block", "none", "none");
    clickDisplay("information2", "informationAccount", "orderedAccount", "baskets_favorite", "block", "none", "none");
}

// When I click on "my orders" then the div with my orders is displayed and the others are hidden.
if (document.getElementById("orderedAccount")) {
    clickDisplay("ordered", "informationAccount", "orderedAccount", "baskets_favorite", "none", "block", "none");
    clickDisplay("ordered2", "informationAccount", "orderedAccount", "baskets_favorite", "none", "block", "none");
}
// When I click on "my saved baskets" then the div with my saved baskets is displayed and the others are hidden.
if (document.getElementById("basketsSave")) {
    clickDisplay("basketsSave", "informationAccount", "orderedAccount", "baskets_favorite", "none", "none", "block");
    clickDisplay("basketsSave2", "informationAccount", "orderedAccount", "baskets_favorite", "none", "none", "block");
}

if (document.getElementById("modifyInformation")) {
    clickDisplay("modifyProfil", "contactInformation", "modifyInformation", "", "none", "flex", "");
}

if (document.getElementById("pdp")) {
    clickDisplay("clickModifyPdp", "pdp", "profilImageModify", "", "none", "flex", "");
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

let nbClick5 = 0;
$("#deliveryAddressBuy").click(function () {
    if (nbClick5 === 0) {
        $("#deliveryAddress2").css("display", "flex");
        nbClick5++;
        $("#arrow3").html("<i class=\"fas fa-angle-up reverse2\"></i>");
    }
    else {
        $("#deliveryAddress2").css("display", "none");
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

let disconnect = document.getElementsByClassName("disconnection");
if (disconnect){
    for (let i= 0 ; i < disconnect.length ; i++){
        disconnect[i].addEventListener('click',function (){
            window.location.href ="../../php/disconnect.php";
        })
    }
}



if (document.getElementById("tableBaskets") && document.getElementById("cartResponsive")){
    itemQuantity(1, "numberArticle1", "price1", "total1", "more1", "less1");
    itemQuantity(2.36, "numberArticle2", "price2", "total2", "more2", "less2");
    itemQuantity(4.99, "numberArticle3", "price3", "total3", "more3", "less3");
}

