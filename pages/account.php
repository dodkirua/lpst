<?php
session_start();

$title = "LPST : Mon compte";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main class="flexRow account">
    <section id="informationProfil">
        <div id="profil" class="flexColumn flexCenter">
            <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
            <p class="nameStaff colorBlue"><?=$_SESSION["surname"] . " " . $_SESSION["name"] ?></p>
            <div class="flexCenter">
                <button id="disconnection" class="redButton disconnection">Déconnexion</button>
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
        <h1 id="hello">Bonjour, <span class="colorGreen"><?=$_SESSION["surname"] . " " . $_SESSION["name"] ?>!</span></h1>
        <section id="otherInformation">
            <div id="informationAccount">
                <h2 class="subtitle"> Mes coordonées</h2>
                <div id="contactInformationModify" >
                    <form id="modifyInformation" action="#" method="post" class="flexColumn flexCenter">
                        <input type="file" name="profilePicture" id="profilePicture" class="whiteBorder">
                        <label for="firstnameModify" class="colorBlue center margin15-30">Prénom </label>
                        <input id="firstnameModify" name="firstnameModify" class="whiteBorder" value="<?= $_SESSION["surname"] ?>" type="text">
                        <label for="lastnameModify" class="colorBlue center margin15-30">Nom </label>
                        <input id="lastnameModify" name="lastnameModify" class="whiteBorder" value="<?= $_SESSION["name"] ?>" type="text">
                        <label for="emailModify" class="colorBlue center margin15-30">Email </label>
                        <input id="emailModify" name="emailModify" class="whiteBorder" value="<?= $_SESSION["mail"] ?>" type="text">
                        <input type="submit" id="modifyInformation2" class="send modify modifyProfil" value="Enregistrer les modifications">
                    </form>
                </div>
                <div id="contactInformation" class="flexColumn flexCenter">
                    <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
                    <p class="colorBlue">Prénom </p>
                    <p class="whiteBorder"><?= $_SESSION["surname"] ?></p>
                    <p class="colorBlue">Nom </p>
                    <p class="whiteBorder"><?= $_SESSION["name"] ?></p>
                    <p class="colorBlue">Email </p>
                    <p class="whiteBorder"><?= $_SESSION["mail"] ?></p>
                    <button id="modifyProfil" class="send modify modifyProfil">Modifier le profil</button>
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

                <!-- Displayed when the screen is at 830px -->
                <div id="orderedResponsive">
                    <div class="containerOrdered flexColumn">
                        <p>Livraison du 00/00/0000</p>
                        <div class="flexRow infoArticle">
                            <img class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                            <div class="infoCart flexCenter">
                                <p class="margin">Nom de l'article</p>
                                <p class="margin"><strong>Prix €</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="containerOrdered flexColumn">
                        <p>Livraison du 00/00/0000</p>
                        <div class="flexRow infoArticle">
                            <img class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                            <div class="infoCart flexCenter">
                                <p class="margin">Nom de l'article</p>
                                <p class="margin"><strong>Prix €</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="containerOrdered flexColumn">
                        <p>Livraison du 00/00/0000</p>
                        <div class="flexRow infoArticle">
                            <img class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                            <div class="infoCart flexCenter">
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
                <div id="cartResponsive" class="flexColumn">
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

                <div class="total flexRow flexCenter margin15-30">
                    <div class="flexRow">
                        <h3 class="colorGreen">Total :</h3>
                        <span id="total1">Total €</span>
                    </div>
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
