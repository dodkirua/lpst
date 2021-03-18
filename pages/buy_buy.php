<?php
session_start();
$title = "LPST : Mon panier";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

    <main>
        <a id="return" href="shopping.php" class="colorBlue underline"> < Retour aux courses</a>
        <img id="lpstLogo2" src="../doc/mockup/lpst.png" alt="Logo LPST">
        <h1>Pa<span class="colorGreen">yer</span></h1>
        <div id="stepBuy" class="flexRow margin15-30">
            <p class="stepBuy center colorGrey2">1. Panier</p>
            <p class="stepBuy center colorGrey2">2. Validation</p>
            <p class="stepBuy center colorBlue">3. Payer</p>
            <p class="stepBuy center colorGrey2">4. Confirmation</p>
        </div>

        <div id="cart" class="flexRow">
            <div id="validation" class="width65 margin15-30">
                <h2 class="subtitle">Mode de livraison</h2>
                <div class="separatorHorizontal"></div>
                <div id="click_Collect" class="delivery flexColumn backgroundBlue colorBlue">
                    <div class="flexRow width_100 align">
                        <input type="radio" id="checkCC" name="delivery">
                        <p>Carte de crédit </p>
                        <p class="colorRed priceDelivery placePrice">images des CARTES</p>
                        <span class="arrow" id="arrow1"><i class="fas fa-angle-down reverse"></i></span>
                    </div>
                </div>
                <!--CHANGER LES ID !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                <div class="sub colorBlue flexCenter" id="choice_CC">
                    <form action="#" method="post" class="flexColumn width65">
                        <label class="width_100">Type de carte </label>
                        <label for="firstname" class="width_100">Prénom</label>
                        <input id="firstname" name="firstname" class="whiteBorder width_100 inputBuy" type="text" required>
                        <label for="lastname" class="width_100">Nom</label>
                        <input id="lastname" name="lastname" class="whiteBorder width_100 inputBuy" type="text" required>
                        <label for="numCards" class="width_100">Numéro de la carte</label>
                        <input id="numCards" name="numCards" class="whiteBorder width_100 inputBuy" type="number" placeholder="0000 0000 0000 0000" required>
                        <label for="dateCards" class="width_100">Date d'expiration</label>
                        <input id="dateCards" name="dateCards" class="whiteBorder width_100 inputBuy" type="number" placeholder="00/00" required>
                        <label for="cvc" class="width_100">CVC</label>
                        <input id="cvc" name="cvc" class="whiteBorder width_100 inputBuy" type="number" placeholder="000" required>
                        <div class="flexRow align inputBuy">
                            <input type="checkbox" id="checkCondition">
                            <p id="condition">J'accepte <a href="terms_and_conditions.php" class="colorBlue underline"> les conditions générales de ventes</a> du magasin les pieds sur terre.</p>
                        </div>
                        <button id="buyTotal" class="modify send width_100 size20">PAYER TOTAL€</button>
                    </form>


                </div>


                <div id="click_Collect" class="delivery flexColumn backgroundBlue colorBlue">
                    <div class="flexRow width_100 align" id="choiceDelivery">
                        <input type="radio" id="checkDelivery" name="delivery">
                        <p>PayPal </p>
                        <p class="colorRed priceDelivery placePrice">Paypal image</p>
                        <span class="arrow" id="arrow2"><i class="fas fa-angle-down reverse"></i></span>
                    </div>
                </div>
                <div class="sub" id="choice_delivery">
                    <div class="flexRow colorBlue align" id="standardDelivery">

                    </div>

                </div>
            </div>

            <div id="buy" class="width30 margin15-30">
                <h2 class="subtitle">Sommaire de commande</h2>
                <div id="separatorTotal" class="separatorHorizontal"></div>
                <p class="margin20 flexRow flexInitial width_100">Sous-total : <span class="end"><strong>143 €</strong></span></p>
                <p class="margin20 flexRow flexInitial width_100">Livraison : <span class="end"><strong>2 €</strong></span></p>
                <p class="margin20 backgroundBlue containerOrdered flexRow size20 colorRed width_100">Total : <span class="end"><strong>145 €</strong></span></p>
            </div>
        </div>
    </main>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
