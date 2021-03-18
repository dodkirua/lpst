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
                    <input type="checkbox" id="checkCC" name="delivery">
                    <p>Retrait en magasin - Click & Collect </p>
                    <p class="colorRed priceDelivery"><strong>GRATUIT</strong></p>
                    <i class="fas fa-angle-down reverse"></i>
                </div>
                <p class="colorGrey linkLog priceDelivery">Disponibilité</p>
            </div>
            <div id="click_Collect" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align">
                    <input type="checkbox" id="checkCC" name="delivery">
                    <p>A l'adresse de mon choix </p>
                    <p class="colorRed priceDelivery"><strong>A partir de ...€</strong></p>
                    <i class="fas fa-angle-down reverse"></i>
                </div>
                <p class="colorGrey linkLog priceDelivery">Disponibilité</p>
            </div>
            <div id="click_Collect" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align">
                    <input type="checkbox" id="checkCC" name="delivery">
                    <p>Retrait au point relais </p>
                    <p class="colorRed priceDelivery"><strong>A partir de ...€</strong></p>
                    <i class="fas fa-angle-down reverse"></i>
                </div>
                <p class="colorGrey linkLog priceDelivery">Disponibilité</p>
            </div>
        </div>
        <div id="buy" class="width30 margin15-30">
            <h2 class="subtitle">Sommaire de commande</h2>
            <div id="separatorTotal" class="separatorHorizontal"></div>
            <p class="margin20 flexRow flexInitial width_100">Sous-total : <span class="end"><strong>143 €</strong></span></p>
            <p class="margin20 flexRow flexInitial width_100">Livraison : <span class="end"><strong>2 €</strong></span></p>
            <p class="margin20 backgroundBlue containerOrdered flexRow size20 colorRed width_100">Total : <span class="end"><strong>145 €</strong></span></p>
            <button id="buyTotal" class="modify send width_100">VALIDATION</button>
            <a href=""
        </div>
    </div>
</main>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";