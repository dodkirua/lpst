<?php
session_start();
$title = "LPST : Réserver notre pain";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

    <main>
        <h1>RESERVER <span class="colorGreen">NOTRE PAIN</span></h1>

            <select id="baker" class="flexCenter">
                <option class="optionBaker" value="">Choisissez votre boulangerie</option>
                <option class="optionBaker" value="Boulangerie 1">Boulangerie 1</option>
                <option class="optionBaker" value="Boulangerie 2">Boulangerie 2</option>
                <option class="optionBaker" value="Boulangerie 3">Boulangerie 3</option>
                <option class="optionBaker" value="Boulangerie 4">Boulangerie 4</option>
            </select>

        <h2 class="subtitle" id="nameBakery"></h2>
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
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<tr class='trTable'>
                    <td><img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'></td>
                    <td>
                        <div class='flexColumn'>
                            <p>Nom de l'article</p>
                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td class='price1'></td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td class='total1'></td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>
        <div id="choiceBread2">
            <table id="tableBaskets" class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                    <th class="colorWhite">Quantité</th>
                    <th class="colorWhite">Total</th>
                    <th class="colorWhite">Ajouter</th>
                </tr>

                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo "<tr class='trTable'>
                    <td><img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'></td>
                    <td>
                        <div class='flexColumn'>
                            <p>Nom de l'article</p>
                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td>0.99€</td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td>0.99€</td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>
        <div id="choiceBread3">
            <table id="tableBaskets" class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                    <th class="colorWhite">Quantité</th>
                    <th class="colorWhite">Total</th>
                    <th class="colorWhite">Ajouter</th>
                </tr>
                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo "<tr class='trTable'>
                    <td><img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'></td>
                    <td>
                        <div class='flexColumn'>
                            <p>Nom de l'article</p>
                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td>1.35€</td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td>1.35€</td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>
        <div id="choiceBread4">
            <table id="tableBaskets" class="flexCenter">
                <tr class="titleTable">
                    <th class="colorWhite">Article</th>
                    <th class="colorWhite">Nom de l'article</th>
                    <th class="colorWhite">Prix</th>
                    <th class="colorWhite">Quantité</th>
                    <th class="colorWhite">Total</th>
                    <th class="colorWhite">Ajouter</th>
                </tr>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    echo "<tr class='trTable'>
                    <td><img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'></td>
                    <td>
                        <div class='flexColumn'>
                            <p>Nom de l'article</p>
                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td>0.99€</td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td>0.99€</td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>

        <!-- Displayed when the screen is at 830px -->
        <div id="cartResponsive" class="flexColumn backgroundBlue">
            <div id="choiceBreadResponsive1">
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<div class='flexRow cartResponsive'>
                    <div>
                        <img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                    </div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p> Nom de l'article</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>1.58 €</p>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p>1.58€</p>
                    </div>
                </div>";
                }
                ?>
            </div>
                <div id="choiceBreadResponsive2">
                    <?php
                    for ($i = 0; $i < 6; $i++) {
                        echo "<div class='flexRow cartResponsive'>
                    <div>
                        <img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                    </div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p> Nom de l'article</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>1.58 €</p>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p>1.58€</p>
                    </div>
                </div>";
                    }
                    ?>
                </div>
                    <div id="choiceBreadResponsive3">
                        <?php
                        for ($i = 0; $i < 4; $i++) {
                            echo "<div class='flexRow cartResponsive'>
                    <div>
                        <img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                    </div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p> Nom de l'article</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>1.58 €</p>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p>1.58€</p>
                    </div>
                </div>";
                        }
                        ?>
                    </div>
                        <div id="choiceBreadResponsive4">
                            <?php
                            for ($i = 0; $i < 10; $i++) {
                                echo "<div class='flexRow cartResponsive'>
                    <div>
                        <img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                    </div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p> Nom de l'article</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>1.58 €</p>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p>1.58€</p>
                    </div>
                </div>";
                            }
                            ?>
            </div>

        </div>


        <div class="flexColumn">
            <div class="flexRow colorGrey">
                <p class="margin">Pain1</p>
                <p class="margin">x3</p>
                <p class="margin">3,55€</p>
            </div>
            <div class="flexRow colorGrey">
                <p class="margin">Pain2</p>
                <p class="margin">x1</p>
                <p class="margin">0,95€</p>
            </div>
            <div class="flexRow colorGrey">
                <p class="margin">Pain3</p>
                <p class="margin">x4</p>
                <p class="margin">6€</p>
            </div>
            <div class="flexRow backgroundBlue flexCenter margin15-30">
                <p class="margin colorRed size20"><strong>TOTAL :</strong></p>
                <p class="margin colorRed size20"><strong>10.5 €</strong></p>
            </div>
        </div>

        <div id="formReserved" class="flexCenter flexColumn">
            <h2 class="center colorWhite">Réservation</h2>
            <form action="#" method="post" class="whiteBorder width65">
                <div class="flexRow width_100 padding30 reserved">
                    <input name="name" class="width30" type="text" placeholder="Nom">
                    <input name="email" class="width30" type="text" placeholder="E-mail">
                    <input name="phone" class="width30" type="text" placeholder="Téléphone">
                </div>
                <div class="flexRow width_100 padding30 reserved">
                    <input name="date" class="width30" type="date">
                    <input name="time" class="width30" type="time">
                </div>
                <input id="validateReservedBread" type="submit" class="brownBorder flexCenter modifyProfil" value="Valider la réservation">
            </form>
        </div>

    </main>


<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";