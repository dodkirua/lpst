<?php
session_start();
$title = "LPST : Mon panier";

if (isset($_SESSION["user"]['mail']) && isset($_SESSION["user"]['pass'])) {
    $title = "LPST : Mon panier";
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

<main>
    <a id="return" href="shopping.php" class="colorBlue underline"> < Retour aux courses</a>
    <img id="lpstLogo2" src="../doc/mockup/lpst.png" alt="Logo LPST">
    <h1>Mon <span class="colorGreen">panier</span></h1>
    <div id="stepBuy" class="flexRow margin15-30">
        <p class="stepBuy center colorBlue">1. Panier</p>
        <p class="stepBuy center colorGrey2">2. Validation</p>
        <p class="stepBuy center colorGrey2">3. Payer</p>
        <p class="stepBuy center colorGrey2">4. Confirmation</p>
    </div>
    <div id="cart" class="flexRow">
        <div id="basket" class="width65 margin15-30">
            <div id="basket2" class="flexRow flexCenter">
                <h2 class="subtitle">Mon panier</h2>
                <button class="buttonClassic favoriteArticleCart"><i class="fas fa-cart-plus leftIcon"></i>Sauvegarder le panier</button>
            </div>
            <div class="separatorHorizontal"></div>
            <table id="tableBaskets" class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                    <th class="colorWhite">Quantité</th>
                    <th class="colorWhite">Total</th>
                </tr>
                <tr class="trTable">
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>
                        <div class="flexColumn">
                            <p>Nom de l'article</p>
                            <div class="flexRow">
                                <button id="addToWishlist1" class="buttonClassic"><i class="far fa-heart"></i></button>
                                <button class="favoriteDelete buttonClassic"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </td>
                    <td class="price1"></td>
                    <td>
                        <div class="flexRow flexCenter">
                            <button class="buttonClassic less1">-</button>
                            <p class="numberArticle numberArticle1">1 </p>
                            <button class="buttonClassic more1">+</button>
                        </div>
                    </td>
                    <td class="total1"></td>
                </tr>
                <tr class="trTable">
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>
                        <div class="flexColumn">
                            <p>Nom de l'article</p>
                            <div class="flexRow">
                                <button id="addToWishlist2" class="buttonClassic"><i class="far fa-heart"></i></button>
                                <button class="favoriteDelete buttonClassic"><i class="far fa-trash-alt"></i></button>
                            </div>
                    </td>
                    <td class="price2"></td>
                    <td>
                        <div class="flexRow flexCenter">
                            <button class="buttonClassic less2">-</button>
                            <p class="numberArticle numberArticle2">1 </p>
                            <button class="buttonClassic more2">+</button>
                        </div>
                    </td>
                    <td class="total2"></td>
                </tr>
                <tr class="trTable">
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>
                        <div class="flexColumn">
                            <p>Nom de l'article</p>
                            <div class="flexRow">
                                <button id="addToWishlist3" class="buttonClassic"><i class="far fa-heart"></i></button>
                                <button class="favoriteDelete buttonClassic"><i class="far fa-trash-alt"></i></button>
                            </div>
                    </td>
                    <td class="price3"></td>
                    <td>
                        <div class="flexRow flexCenter">
                            <button class="buttonClassic less3">-</button>
                            <p class="numberArticle numberArticle3">1 </p>
                            <button class="buttonClassic more3">+</button>
                        </div>
                    </td>
                    <td class="total3"></td>
                </tr>
            </table>

            <!-- Displayed when the screen is at 830px -->
            <div id="cartResponsive" class="flexColumn backgroundBlue">
                <div class="flexRow cartResponsive">
                    <div>
                        <img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    </div>
                    <div class="flexColumn infoCart">
                        <div class="flexRow flexCenter">
                            <p> Nom de l'article</p>
                            <button class="buttonClassic favoriteArticleCart"><i class="far fa-heart"></i></button>
                            <button class="favoriteDelete buttonClassic"><i class="far fa-trash-alt"></i></button>
                        </div>
                        <p class="price1"></p>
                        <div class="flexRow flexCenter">
                            <button class="buttonClassic less1">-</button>
                            <p class="numberArticle numberArticle1">1 </p>
                            <button class="buttonClassic more1">+</button>
                        </div>
                        <p class="total1"></p>
                    </div>
                </div>
                <div class="flexRow cartResponsive">
                    <div>
                        <img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    </div>
                    <div class="flexColumn infoCart">
                        <div class="flexRow flexCenter">
                            <p> Nom de l'article</p>
                            <button class="buttonClassic favoriteArticleCart"><i class="far fa-heart"></i></button>
                            <button class="favoriteDelete buttonClassic"><i class="far fa-trash-alt"></i></button>
                        </div>
                        <p class="price2"></p>
                        <div class="flexRow flexCenter">
                            <button class="buttonClassic less2">-</button>
                            <p class="numberArticle numberArticle2">1 </p>
                            <button class="buttonClassic more2">+</button>
                        </div>
                        <p class="total2"></p>
                    </div>
                </div>
                <div class="flexRow cartResponsive">
                    <div>
                        <img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    </div>
                    <div class="flexColumn infoCart">
                        <div class="flexRow flexCenter">
                            <p> Nom de l'article</p>
                            <button class="buttonClassic favoriteArticleCart"><i class="far fa-heart"></i></button>
                            <button class="favoriteDelete buttonClassic"><i class="far fa-trash-alt"></i></button>
                        </div>
                        <p class="price3"></p>
                        <div class="flexRow flexCenter">
                            <button class="buttonClassic less3">-</button>
                            <p class="numberArticle numberArticle3">1 </p>
                            <button class="buttonClassic more3">+</button>
                        </div>
                        <p class="total3"></p>
                    </div>
                </div>
            </div>

        </div>
        <div id="buy" class="width30 margin15-30">
            <h2 class="subtitle">Sommaire de commande</h2>
            <div id="separatorTotal" class="separatorHorizontal"></div>
            <div class="backgroundBlue containerOrdered">
                <p class="center margin15-30"><strong>total €</strong></p>
                <button id="buyTotal" class="modify send width_100">PAYER</button>
                <a href="buy_checkout.php" class="send width_100">(Payer test)</a>
                <p class="linkLog">Nous acceptons : <i class="fab fa-cc-visa leftIcon size20"></i><i class="fab fa-cc-amex leftIcon size20"></i><i class="fab fa-cc-mastercard leftIcon size20"></i><i class="fab fa-cc-paypal leftIcon size20"> CB</i></p>
            </div>
            <div class="flexColumn">
                <p class="colorBlue"> Click & Collect : </p>
                <span class="linkLog colorGrey">Commandé avant 11h, disponible à 15h.</span>
                <span class="linkLog colorGrey">Commandé après 11h, disponible le lendemain après-midi.</span>
                <p class="colorBlue"> Livraison disponible : </p>
                <span class="linkLog colorGrey">A partir de 50€ d'achat, 5€ de frais de port.</span>
                <span class="linkLog colorGrey">A partir de 100€ d'achat, frais de port gratuit.</span>
            </div>

        </div>
    </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}