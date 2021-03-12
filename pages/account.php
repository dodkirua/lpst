<?php

$title = "LPST : Mon compte";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main class="flexRow">
    <h1 id="hello">Bonjour, <span class="colorGreen">.....</span></h1>
    <section id="informationProfil">
        <div id="profil" class="flexColumn flexCenter">
            <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
            <p class="nameStaff colorBlue">Prénom NOM</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="information" class="select">
            <p class="colorWhite">Mes informations</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="ordered" class="select">
            <p class="colorWhite">Mes commandes</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="basketsSave" class="select">
            <p class="colorWhite">Mes paniers sauvegardés</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="setting" class="select">
            <p class="colorWhite">Mes paramètres</p>
        </div>

    </section>

    <section id="otherInformation">
        <div id="informationAccount">
            <h2 class="subtitle"> Mes coordonées</h2>
            <div class="flexColumn flexCenter">
                <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
                <p class="colorBlue">Prénom </p>
                <p class="whiteBorder">(Prénom)</p>
                <p class="colorBlue">Nom </p>
                <p class="whiteBorder">(Nom)</p>
                <p class="colorBlue">Email </p>
                <p class="whiteBorder">(prenom.nom@mail.com)</p>
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

            <div class="flexCenter">
                <button class="redButton">Déconnexion</button>
            </div>
        </div>

        <div id="orderedAccount">
            <h2 class="subtitle">Mes commandes</h2>
            <table class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Date</th>
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                </tr>
                <tr>
                    <td> 00/00/0000</td>
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>Nom de l'article</td>
                    <td>Prix €</td>
                </tr>
                <tr>
                    <td> 00/00/0000</td>
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>Nom de l'article</td>
                    <td>Prix €</td>
                </tr>
                <tr>
                    <td> 00/00/0000</td>
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>Nom de l'article</td>
                    <td>Prix €</td>
                </tr>
            </table>
        </div>

        <div id="baskets_favorite">
            <h2 class="subtitle">Mes paniers sauvegardés</h2>
            <table class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                    <th class="colorWhite">Quantité</th>
                    <th class="colorWhite">Total</th>
                    <th class="colorWhite">Supprimer</th>
                </tr>
                <tr>
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>Nom de l'article</td>
                    <td>Prix €</td>
                    <td class="center width30">
                        <button class="buttonAjout">-</button>
                        <input class="numberArticle" value="1" type="number">
                        <button class="buttonAjout">+</button>
                    </td>
                    <td>Prix €</td>
                    <td class="center"><button class="redButton"><i class="far fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>Nom de l'article</td>
                    <td>Prix €</td>
                    <td class="center width30">
                        <button class="buttonAjout">-</button>
                        <input class="numberArticle" value="1" type="number">
                        <button class="buttonAjout">+</button>
                    </td>
                    <td>Prix €</td>
                    <td class="center"><button class="redButton"><i class="far fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>Nom de l'article</td>
                    <td>Prix €</td>
                    <td class="center width30">
                        <button class="buttonAjout">-</button>
                        <input class="numberArticle" value="1" type="number">
                        <button class="buttonAjout">+</button>
                    </td>
                    <td>Prix €</td>
                    <td class="center"><button class="redButton"><i class="far fa-trash-alt"></i></button></td>
                </tr>
            </table>
            <div class="separatorHorizontal"></div>
            <h2 class="subtitle">Mes articles favoris</h2>
            <div class="flexRow">
                <div class="wishlist flexCenter flexColumn">
                    <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    <p class="colorBlue">Nom de l'article</p>
                    <span>Prix €</span>
                </div>
                <div class="wishlist flexCenter flexColumn">
                    <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    <p class="colorBlue">Nom de l'article</p>
                    <span>Prix €</span>
                </div>
                <div class="wishlist flexCenter flexColumn">
                    <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    <p class="colorBlue">Nom de l'article</p>
                    <span>Prix €</span>
                </div>
                <div class="wishlist flexCenter flexColumn">
                    <img class="imgTable" alt="wishlistPhoto" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164">
                    <p class="colorBlue">Nom de l'article</p>
                    <span>Prix €</span>
                </div>
            </div>

        </div>
    </section>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
