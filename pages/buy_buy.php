<?php
session_start();

if (isset($_SESSION["user"]['mail']) && isset($_SESSION["user"]['pass'])) {
    $title = "LPST : Payer";
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
                <div id="buyCards" class="delivery flexColumn backgroundBlue colorBlue">
                    <div class="flexRow width_100 align">
                        <input type="radio" id="checkAllCards" name="delivery">
                        <p>Carte de crédit </p>
                        <div class="widthLogo placePrice3 flexRow"><i class="fab fa-cc-visa leftIcon"></i><i class="fab fa-cc-amex leftIcon"></i><i class="fab fa-cc-mastercard leftIcon"></i>CB</div>
                        <span class="arrow" id="arrow1"><i class="fas fa-angle-down reverse"></i></span>
                    </div>
                </div>
                <!--CHANGER LES ID !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                <div class="sub colorBlue flexCenter" id="choice_Cards">
                    <form action="#" method="post" class="flexColumn width65">
                        <label class="width_100">Type de carte </label>
                        <div class="flexRow">
                            <input id="visa" name="card" class="whiteBorder width_100 inputBuy" type="radio" required>
                            <p class="size20"><i class="fab fa-cc-visa leftIcon"></i></p>
                            <input id="amex" name="card" class="whiteBorder width_100 inputBuy" type="radio" required>
                            <p class="size20"><i class="fab fa-cc-amex leftIcon"></i></p>
                            <input id="mastercard" name="card" class="whiteBorder width_100 inputBuy" type="radio" required>
                            <p class="size20"><i class="fab fa-cc-mastercard leftIcon"></i></p>
                            <input id="cb" name="card" class="whiteBorder width_100 inputBuy" type="radio" required>
                            <p class="size20">CB</p>
                        </div>
                        <label for="firstname" class="width_100">Prénom</label>
                        <input id="firstname" name="firstname" class="whiteBorder width_100 inputBuy" type="text" required>
                        <label for="lastname" class="width_100">Nom</label>
                        <input id="lastname" name="lastname" class="whiteBorder width_100 inputBuy" type="text" required>
                        <label for="numCards" class="width_100">Numéro de la carte</label>
                        <input id="numCards" name="numCards" class="whiteBorder width_100 inputBuy" type="text" placeholder="0000 0000 0000 0000" required>
                        <label for="dateCards" class="width_100">Date d'expiration</label>
                        <input id="dateCards" name="dateCards" class="whiteBorder width_100 inputBuy" type="text" placeholder="00/00" required>
                        <label for="cvc" class="width_100">CVC</label>
                        <input id="cvc" name="cvc" class="whiteBorder width_100 inputBuy" type="text" placeholder="000" required>
                        <div class="flexRow align inputBuy">
                            <input type="checkbox" id="checkCards">
                            <p id="condition">J'accepte <a href="terms_and_conditions.php" class="colorBlue underline"> les conditions générales de ventes</a> du magasin les pieds sur terre.</p>
                        </div>
                        <button id="buyCards2" class="modify send width_100 size20">PAYER TOTAL€</button>
                    </form>


                </div>


                <div id="paypalBuy" class="delivery flexColumn backgroundBlue colorBlue">
                    <div class="flexRow width_100 align" id="choicePaypal">
                        <input type="radio" id="checkPaypal" name="delivery">
                        <p>PayPal </p>
                        <span class="widthLogo placePrice2"><i class="fab fa-paypal"></i></span>
                        <span class="arrow" id="arrow2"><i class="fas fa-angle-down reverse"></i></span>
                    </div>
                </div>
                <div class="sub flexCenter" id="choice_paypal">
                    <div class="flexRow colorBlue align flexCenter" id="buyPaypal">
                        <form action="#" method="post" class="flexColumn width100">
                            <div class="flexRow align inputBuy">
                                <input type="checkbox" id="checkPaypal2">
                                <p id="condition">J'accepte <a href="terms_and_conditions.php" class="colorBlue underline"> les conditions générales de ventes</a> du magasin les pieds sur terre.</p>
                            </div>
                            <button id="buyPaypal2" class="modify send width_100 size20">PAYER AVEC PAYPAL</button>
                            <p class="linkLog colorGrey">Vous allez être redirigé vers une autre page.</p>
                        </form>
                    </div>
                </div>
            </div>

            <div id="buy" class="width30 margin15-30">
                <h2 class="subtitle">Sommaire de commande</h2>
                <div id="separatorTotal" class="separatorHorizontal"></div>
                <p id="subTotal" class="margin20 flexRow flexInitial width_100"></p>
                <p id="totalDelivery" class="margin20 flexRow flexInitial width_100"></p>
                <p id="totalBuy" class="margin20 backgroundBlue containerOrdered flexRow size20 colorRed width_100"></p>
                <div id="billingAddress" class="delivery flexColumn backgroundBlue colorBlue">
                    <div class="flexRow width_100 align">
                        <p class="title2">Adresse de facturation</p>
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

                <div id="deliveryAddressBuy" class="delivery flexColumn backgroundBlue colorBlue">
                    <div class="flexRow width_100 align">
                        <p class="title2">Adresse de livraison</p>
                        <span id="arrow3"><i class="fas fa-angle-down reverse2"></i></span>
                    </div>
                </div>
                <div class="flexColumn sub backgroundBlue flexCenter" id="deliveryAddress2">
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