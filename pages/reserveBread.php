<?php
session_start();
$title = "LPST : Réserver notre pain";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

    <main>
        <h1>RESERVER <span class="colorGreen">NOTRE PAIN</span></h1>

        <select id="baker" class="flexCenter">
            <option value="choice">Choisissez votre boulangerie</option>
            <option value="bakery1">Boulangerie 1</option>
            <option value="bakery2">Boulangerie 2</option>
            <option value="bakery3">Boulangerie 3</option>
            <option value="bakery4">Boulangerie 4</option>
            <option value="bakery5">Boulangerie 5</option>
        </select>

        <div id="choiceBread">
            <table id="tableBaskets" class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                    <th class="colorWhite">Quantité</th>
                    <th class="colorWhite">Total</th>
                    <th class="colorWhite">Ajouter</th>
                </tr>
                <tr class="trTable">
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>
                        <div class="flexColumn">
                            <p>Nom de l'article</p>
                            <div class="flexRow">
                                <button class="buttonClassic"><i class="far fa-heart"></i></button>
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
                    <td><button class="send width65"><i class="fas fa-plus"></i></button></td>
                </tr>
                <tr class="trTable">
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>
                        <div class="flexColumn">
                            <p>Nom de l'article</p>
                            <div class="flexRow">
                                <button class="buttonClassic"><i class="far fa-heart"></i></button>
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
                    <td><button class="send width65"><i class="fas fa-plus"></i></button></td>
                </tr>
                <tr class="trTable">
                    <td><img alt="articlePhoto" class="imgTable" src="https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164"></td>
                    <td>
                        <div class="flexColumn">
                            <p>Nom de l'article</p>
                            <div class="flexRow">
                                <button class="buttonClassic"><i class="far fa-heart"></i></button>
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
                    <td><button class="send width65"><i class="fas fa-plus"></i></button></td>
                </tr>
            </table>
        </div>
        <div class="flexColumn">
            <div>
                <p>Pain1</p>
                <p>x3</p>
                <p>3,55€</p>
            </div>
            <button class="brownBorder flexCenter"> Valider </button>
        </div>

    </main>


<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";