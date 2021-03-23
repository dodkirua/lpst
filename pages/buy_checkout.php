<?php
session_start();
$date = date("H:i:s");
$date11 = "11:00:00";

if (isset($_SESSION["user"]['mail']) && isset($_SESSION["user"]['pass'])) {
    $title = "LPST : Validation";
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
                <?php
                if ($date < $date11) {
                    ?>
                    <p class="colorGrey linkLog">Disponible aujourd'hui à 15h.</p>
                    <?php
                }
                else {
                    ?>
                    <p class="colorGrey linkLog">Disponible demain à 15h.</p>
                    <?php
                }
                ?>
            </div>
            <div class="sub" id="choice_CC">
                <div class="flexRow colorBlue align">
                    <input type="radio" id="checkCC2" name="CCdelivery">
                    <div class="flexColumn">
                        <p>Click & Collect au <strong>magasin Les pieds sur terre à Fourmies</strong></p>
                        <?php
                        if ($date < $date11) {
                            ?>
                            <p class="colorGrey linkLog">Disponible aujourd'hui à 15h.</p>
                        <?php
                        }
                        else {
                            ?>
                            <p class="colorGrey linkLog">Disponible demain à 15h.</p>
                        <?php
                        }
                        ?>
                    </div>
                    <p class="colorRed priceDelivery placePrice"><strong>GRATUIT</strong></p>
                </div>
            </div>


            <div id="delivery2" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align" id="choiceDelivery">
                    <input type="radio" id="checkDelivery" name="delivery">
                    <p class="title">A l'adresse de mon choix </p>
                    <p class="colorRed priceDelivery placePrice" id="buyDelivery"></p>
                    <span class="arrow" id="arrow2"><i class="fas fa-angle-down reverse"></i></span>
                </div>
                <p class="colorGrey linkLog priceDelivery">Dans 48h après 17h</p>
            </div>
            <div class="sub" id="choice_delivery">
                <div class="flexRow colorBlue align" id="standardDelivery">
                    <input type="radio" id="checkStandard" name="delivery2">
                    <div class="flexColumn">
                        <p>Livraison standard</p>
                        <p class="colorGrey linkLog">Dans 48h après 17h</p>
                    </div>
                    <p class="colorRed priceDelivery placePrice"><span id="buyDelivery2"></span></p>
                </div>
                <div class="flexRow colorBlue flexCenter sub" id="address1">
                    <button id="saveAddress1" class="modify send width65">Enregistrer une adresse de livraison</button>
                </div>
            </div>
        </div>

        <div id="buy" class="width30 margin15-30">
            <h2 class="subtitle">Sommaire de commande</h2>
            <div id="separatorTotal" class="separatorHorizontal"></div>
            <p class="margin20 flexRow flexInitial width_100">Sous-total : <span class="end"><strong>143 €</strong></span></p>
            <p class="margin20 flexRow flexInitial width_100">Livraison : <span class="end"><strong>2 €</strong></span></p>
            <p class="margin20 backgroundBlue containerOrdered flexRow size20 colorRed width_100">Total : <span id="totalBuy" class="end"></span></p>
            <button id="buyTotal" class="modify send width_100">VALIDATION</button>
            <a  class="send modify width_100" href="buy_buy.php">(validation test)</a>

            <div id="billingAddress" class="delivery flexColumn backgroundBlue colorBlue">
                <div class="flexRow width_100 align">
                    <p class="title2">Adresse de facturation </p>
                    <span id="arrow3"><i class="fas fa-angle-down reverse2"></i></span>
                </div>
            </div>
            <div class="flexColumn sub backgroundBlue flexCenter" id="billingAddress2">
                <span class="linkLog"><strong>PRENOM NOM</strong></span>
                <span class="linkLog">Numero + rue</span>
                <span class="linkLog">code postale + ville</span>
                <span class="linkLog">pays</span>
                <span class="linkLog colorBlue underline" id="modifybillingAddress">Modifier</span>
            </div>
        </div>
    </div>
</main>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}