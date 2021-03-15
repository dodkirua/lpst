<?php

$title = "LPST : Mon compte";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main class="flexRow account">
    <section id="informationProfil">
        <div id="profil" class="flexColumn flexCenter">
            <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
            <p class="nameStaff colorBlue">Prénom NOM</p>
            <div class="flexCenter">
                <button id="disconnection" class="redButton">Déconnexion</button>
            </div>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="information" class="select selectComputer">
            <p class="colorWhite">Mes informations</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="ordered" class="select selectComputer">
            <p class="colorWhite">Mes commandes</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="basketsSave" class="select selectComputer">
            <p class="colorWhite">Mes paniers sauvegardés</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="setting" class="select selectComputer">
            <p class="colorWhite">Mes paramètres</p>
        </div>

        <!-- Displayed when the screen is at 530px -->
        <div id="accountResponsive" class="flexRow">
            <div id="information2" class="select selectMobile">
                <p class="colorWhite"><i class="fas fa-user-alt"></i></p>
            </div>
            <div id="ordered2" class="select selectMobile">
                <p class="colorWhite"><i class="fas fa-credit-card"></i></p>
            </div>
            <div id="basketsSave2" class="select selectMobile">
                <p class="colorWhite"><i class="fas fa-shopping-basket"></i></p>
            </div>
            <div id="setting2" class="select selectMobile">
                <p class="colorWhite"><i class="fas fa-cog"></i></p>
            </div>
        </div>

        <!-- Displayed when the screen is at 680px -->
        <button id="disconnectionResponsive" class="redButton"><i class="fas fa-power-off"></i></button>


    </section>
    <div class="flexColumn width65">
        <h1 id="hello">Bonjour, <span class="colorGreen">Prénom NOM !</span></h1>
        <section id="otherInformation">
            <div id="informationAccount">
                <h2 class="subtitle"> Mes coordonées</h2>
                <div class="flexColumn flexCenter">
                    <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
                    <p class="colorBlue">Prénom </p>
                    <p class="whiteBorder">Prénom</p>
                    <p class="colorBlue">Nom </p>
                    <p class="whiteBorder">Nom</p>
                    <p class="colorBlue">Email </p>
                    <p class="whiteBorder">prenom.nom@mail.com</p>
                    <div class="flexCenter">
                        <button id="modifyPorfil" class="send modify">Modifier le profil</button>
                    </div>
                </div>
                <div class="separatorHorizontal"></div>
                <h2 class="subtitle"> Mes adresses</h2>
                <h3 class="colorGrey "> Adresse de facturation</h3>
                <h3 class="colorGrey"> Adresse de livraison</h3>

                <div class="separatorHorizontal"></div>
                <div class="flexColumn">
                    <h2 class="subtitle"> Changer mon mot de passe</h2>
                    <label class="colorBlue" for="currentPwd">Mon mot de passe actuel</label>
                    <input id="currentPwd" name="currentPwd" type="password">
                    <label class="colorBlue" for="newPwd">Mon nouveau mot de passe</label>
                    <input name="newPwd" id="newPwd" type="password">
                    <div class="flexCenter">
                        <button id="modifypwd" class="send modify">Valider</button>
                    </div>
                </div>
            </div>

            <div id="orderedAccount">
                <h2 class="subtitle">Mes commandes</h2>
                <table id="tableOrdered" class="flexCenter">
                    <tr class="titleTable">
                        <th class="colorWhite">Date</th>
                        <th class="colorWhite">Article</th>
                        <th class="colorWhite">Nom de l'article</th>
                        <th class="colorWhite">Prix</th>
                    </tr>
                    <tr class="trTable">
                        <td> 00/00/0000</td>
                        <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                        <td>Nom de l'article</td>
                        <td><strong>Prix €</strong></td>
                    </tr>
                    <tr class="trTable">
                        <td> 00/00/0000</td>
                        <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                        <td>Nom de l'article</td>
                        <td><strong>Prix €</strong></td>
                    </tr>
                    <tr class="trTable">
                        <td> 00/00/0000</td>
                        <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                        <td>Nom de l'article</td>
                        <td><strong>Prix €</strong></td>
                    </tr>
                </table>

                <!-- -->
                <div id="orderedResponsive">
                    <div class="containerOrdered flexColumn">
                        <p>Livraison du 00/00/0000</p>
                        <div class="flexRow infoArticle">
                            <div>
                                <img class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                            </div>
                            <div class="infoCart">
                                <p class="margin">Nom de l'article</p>
                                <p class="margin"><strong>Prix €</strong></p>
                            </div>
                        </div>
                    </div>
                    <<div class="containerOrdered flexColumn">
                        <p>Livraison du 00/00/0000</p>
                        <div class="flexRow infoArticle">
                            <div>
                                <img class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                            </div>
                            <div class="infoCart">
                                <p class="margin">Nom de l'article</p>
                                <p class="margin"><strong>Prix €</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="containerOrdered flexColumn">
                        <p>Livraison du 00/00/0000</p>
                        <div class="flexRow infoArticle">
                            <div>
                                <img class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                            </div>
                            <div class="infoCart">
                                <p class="margin">Nom de l'article</p>
                                <p class="margin"><strong>Prix €</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="baskets_favorite">
                <h2 class="subtitle">Mes paniers sauvegardés</h2>
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
                        <td><strong>Prix €</strong></td>
                        <td class="center width30">
                            <button class="buttonClassic">-</button>
                            <input class="numberArticle" value="1" type="number">
                            <button class="buttonClassic">+</button>
                        </td>
                        <td><strong>Prix €</strong></td>
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
                        <td><strong>Prix €</strong></td>
                        <td class="center width30">
                            <button class="buttonClassic">-</button>
                            <input class="numberArticle" value="1" type="number">
                            <button class="buttonClassic">+</button>
                        </td>
                        <td><strong>Prix €</strong></td>
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
                        <td><strong>Prix €</strong></td>
                        <td class="center width30">
                            <button class="buttonClassic">-</button>
                            <input class="numberArticle" value="1" type="number">
                            <button class="buttonClassic">+</button>
                        </td>
                        <td><strong>Prix €</strong></td>
                    </tr>
                </table>

                <div id="cartResponsive">
                    <div class="flexRow cartResponsive">
                        <div>
                            <img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                        </div>
                        <div class="flexColumn infoCart">
                            <div class="flexRow flexCenter">
                                <p> Nom de l'article</p>
                                <button class="buttonClassic favoriteArticleCart"><i class="far fa-heart"></i></button>
                            </div>
                            <p><strong>Prix €</strong></p>
                            <div>
                                <button class="buttonClassic">-</button>
                                <input class="numberArticle" value="1" type="number">
                                <button class="buttonClassic">+</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flexRow flexCenter margin15-30">
                    <h3 class="colorGreen">Total :</h3>
                    <span id="total1">Total €</span>
                    <button id="buy1" class="send">PAYER</button>
                </div>

                <div class="separatorHorizontal"></div>
                <h2 class="subtitle">Mes articles favoris</h2>
                <div class="flexRow">
                    <div class="wishlist flexCenter flexColumn">
                        <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                        <p class="colorBlue">Nom de l'article</p>
                        <span><strong>Prix €</strong></span>
                        <div class="flexRow">
                            <button id="addToCart1" class="buttonClassic"><i class="fas fa-shopping-basket"></i></button>
                            <button class="buttonClassic favoriteDelete"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="wishlist flexCenter flexColumn">
                        <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                        <p class="colorBlue">Nom de l'article</p>
                        <span><strong>Prix €</strong></span>
                        <div class="flexRow">
                            <button id="addToCart2" class="buttonClassic"><i class="fas fa-shopping-basket"></i></button>
                            <button class="buttonClassic favoriteDelete"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="wishlist flexCenter flexColumn">
                        <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                        <p class="colorBlue">Nom de l'article</p>
                        <span><strong>Prix €</strong></span>
                        <div class="flexRow">
                            <button id="addToCart3" class="buttonClassic"><i class="fas fa-shopping-basket"></i></button>
                            <button class="buttonClassic favoriteDelete"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="wishlist flexCenter flexColumn">
                        <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                        <p class="colorBlue">Nom de l'article</p>
                        <span><strong>Prix €</strong></span>
                        <div class="flexRow">
                            <button id="addToCart4" class="buttonClassic"><i class="fas fa-shopping-basket"></i></button>
                            <button class="buttonClassic favoriteDelete"><i class="far fa-trash-alt"></i></button>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>

</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
