import {comparePass, validate, validatePass} from "./registration.js";
import {itemQuantity} from "./article.js";
import {closeModal} from "./function.js";
import {clickDisplay} from "./account.js";

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
if (document.getElementById("totalBuy")){
    let totalBuy = document.getElementById("totalBuy").innerHTML = "145";
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
        }
        else if (baker.value === "Boulangerie 2") {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "flex";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "none";
        }
        else if (baker.value === "Boulangerie 3") {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "flex";
            document.getElementById("choiceBread4").style.display = "none";
        }
        else if (baker.value === "Boulangerie 4") {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "flex";
        }
        else {
            document.getElementById("choiceBread").style.display = "none";
            document.getElementById("choiceBread2").style.display = "none";
            document.getElementById("choiceBread3").style.display = "none";
            document.getElementById("choiceBread4").style.display = "none";
        }
    });
}

if (document.getElementById("clickPhone")) {
    clickDisplay("clickPhone", "modifyPhone", "", "baskets_favorite", "none", "none", "block");
    clickDisplay("basketsSave2", "informationAccount", "orderedAccount", "baskets_favorite", "none", "none", "block");
}

if (document.getElementById("tableBaskets") && document.getElementById("cartResponsive")){
    itemQuantity(1, "numberArticle1", "price1", "total1", "more1", "less1");
    itemQuantity(2.36, "numberArticle2", "price2", "total2", "more2", "less2");
    itemQuantity(4.99, "numberArticle3", "price3", "total3", "more3", "less3");
}
