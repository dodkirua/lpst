<?php
session_start();
$title = "LPST : Mon panier";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

<main>
    <a id="return" href="shopping.php" class="colorBlue underline"> < Retour aux courses</a>
    <img id="lpstLogo2" src="../doc/mockup/lpst.png" alt="Logo LPST">
    <h1>Valid<span class="colorGreen">ation</span></h1>
    <div id="stepBuy" class="flexRow margin15-30">
        <p class="stepBuy center colorGrey2">1. Panier</p>
        <p class="stepBuy center colorBlue">2. Validation</p>
        <p class="stepBuy center colorGrey2">3. Payer</p>
        <p class="stepBuy center colorGrey2">4. Confirmation</p>
    </div>

    <div id="cart" class="flexRow">
        <div id="validation" class="width65 margin15-30">
            <h2 class="subtitle">Mode de livraison</h2>
            <div class="separatorHorizontal"></div>
            <div id="click_Collect" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align">
                    <input type="radio" id="checkCC" name="delivery">
                    <p class="title">Retrait en magasin - Click & Collect </p>
                    <p class="colorRed priceDelivery placePrice"><strong>GRATUIT</strong></p>
                    <span class="arrow" id="arrow1"><i class="fas fa-angle-down reverse"></i></span>
                </div>
                <p class="colorGrey linkLog priceDelivery">Disponibilité</p>
            </div>
            <div class="sub" id="choice_CC">
                <div class="flexRow colorBlue align">
                    <input type="radio" id="checkCC2" name="CCdelivery">
                    <div class="flexColumn">
                        <p>Click & Collect au magasin Les pieds sur terre à Fourmies</p>
                        <p class="colorGrey linkLog">Disponible dans ..h pendant ..j</p>
                    </div>
                    <p class="colorRed priceDelivery placePrice"><strong>GRATUIT</strong></p>
                </div>
            </div>


            <div id="click_Collect" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align" id="choiceDelivery">
                    <input type="radio" id="checkDelivery" name="delivery">
                    <p class="title">A l'adresse de mon choix </p>
                    <p class="colorRed priceDelivery placePrice">A partir de <strong>... €</strong></p>
                    <span class="arrow" id="arrow2"><i class="fas fa-angle-down reverse"></i></span>
                </div>
                <p class="colorGrey linkLog priceDelivery">Disponibilité</p>
            </div>
            <div class="sub" id="choice_delivery">
                <div class="flexRow colorBlue align" id="standardDelivery">
                    <input type="radio" id="checkStandard" name="delivery2">
                    <div class="flexColumn">
                        <p>Livraison standard</p>
                        <p class="colorGrey linkLog">Entre le ../.. et le ../..</p>
                    </div>
                    <p class="colorRed priceDelivery placePrice"><strong>... €</strong></p>
                </div>
                <div class="flexRow colorBlue flexCenter sub" id="address1">
                    <button id="saveAddress1" class="modify send width65">Enregistrer une adresse de livraison</button>
                </div>

                <div class="flexRow colorBlue align" id="chronopostDelivery">
                    <input type="radio" id="checkchronopost" name="delivery2">
                    <div class="flexColumn">
                        <p>Livraison Chronopost</p>
                        <p class="colorGrey linkLog">Entre le ../.. et le ../..</p>
                    </div>
                    <p class="colorRed priceDelivery placePrice"><strong>... €</strong></p>
                </div>
                <div class="flexRow colorBlue flexCenter sub" id="address2">
                    <button id="saveAddress1" class="modify send width65">Enregistrer une adresse de livraison</button>
                </div>
            </div>
        </div>

        <div id="buy" class="width30 margin15-30">
            <h2 class="subtitle">Sommaire de commande</h2>
            <div id="separatorTotal" class="separatorHorizontal"></div>
            <p class="margin20 flexRow flexInitial width_100">Sous-total : <span class="end"><strong>143 €</strong></span></p>
            <p class="margin20 flexRow flexInitial width_100">Livraison : <span class="end"><strong>2 €</strong></span></p>
            <p class="margin20 backgroundBlue containerOrdered flexRow size20 colorRed width_100">Total : <span class="end"><strong>145 €</strong></span></p>
            <button id="buyTotal" class="modify send width_100">VALIDATION</button>
            <a  class="send modify width_100" href="buy_buy.php">(validation test)</a>

            <div id="billingAddress" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align">
                    <p class="title2">Adresse de facturation </p>
                    <span class="arrow" id="arrow3"><i class="fas fa-angle-down reverse2"></i></span>
                </div>
            </div>
            <div class="flexColumn sub backgroundBlue" id="billingAddress2">
                <span class="linkLog">PRENOM NOM</span>
                <span class="linkLog">Numero + rue</span>
                <span class="linkLog">code postale + ville</span>
                <span class="linkLog">pays</span>
                <span class="linkLog colorBlue underline">Modifier</span>
            </div>
        </div>
    </div>
</main>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";