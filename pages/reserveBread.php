<?php
session_start();
$title = "LPST : Réserver notre pain";

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/BakerManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/BreadManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/BakerDeliveryManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/DeliveryDateManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

$bakerManager = new BakerManager();
$bakers = $bakerManager->getAll();
$breadManager = new BreadManager();
$bakerDeliveryManager = new BakerDeliveryManager();
$deliveryDate = new DeliveryDateManager();
?>
    <main>
        <h1>RÉSERVATION <span class="colorGreen">DE PAIN</span></h1>
            <select id="baker" class="flexCenter">
                <option class="optionBaker" value="">Choisissez votre boulangerie</option>
                    <?php
                    $i = 0;
                    foreach ($bakers as $item) {
                        $i++;
                        $baker = $item->getData();
                        echo "<option class='optionBaker' id='baker" . $i . "' value='" . $baker['name'] . "'>" . $baker['name'] . "</option>";
                    }
                    ?>
            </select>

        <h2 class="subtitle" id="nameBakery"></h2>
        <div id="choiceBread" class="flexColumn">
            <?php
            bakerDelivery(1, $bakerDeliveryManager, $deliveryDate);
            ?>
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
                $breads1 = $breadManager->getByBaker(1);
                $i = 0;
                foreach ($breads1 as $item) {
                    $bread1 = $item->getData();
                    $i++;
                    echo "<tr class='trTable'>
                    <td>";
                        imageProducts($bread1['image'], $bread1['name']);
                    echo "<td>
                        <div class='flexColumn'>
                            <p class='size20'>". $bread1['name'] ."</p>
                            <p>". $bread1['description'] ."</p>   

                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td><p class='bold size20'>". $bread1['price'] ." €</p>
                    <input type='hidden' id='price' class='price1' value='". $bread1['price'] ."'>
                        <p>". $bread1['weight'] ." / Kg</p>   
                    </td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td class='bold size20 total1'>". $bread1['price'] ."€</td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>
        <div id="choiceBread2" class="flexColumn">
            <?php
            bakerDelivery(2, $bakerDeliveryManager, $deliveryDate);
            ?>
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
                $breads2 = $breadManager->getByBaker(2);
                $i = 0;
                foreach ($breads2 as $item) {
                    $bread2 = $item->getData();
                    $i++;
                    echo "<tr class='trTable'>
                    <td>";
                        imageProducts($bread2['image'], $bread2['name']);
                    echo "<td>
                        <div class='flexColumn'>
                            <p class='size20'>". $bread2['name'] ."</p>
                            <p>". $bread2['description'] ."</p>   

                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td><p class='bold size20'>". $bread2['price'] ."</p>
                        <p>". $bread2['weight'] ." / Kg</p>   
                    </td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td class='bold size20'>". $bread2['price'] ."</td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>
        <div id="choiceBread3" class="flexColumn">
            <?php
            bakerDelivery(3, $bakerDeliveryManager, $deliveryDate);
            ?>
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
                $breads3 = $breadManager->getByBaker(3);
                $i = 0;
                foreach ($breads3 as $item) {
                    $bread3 = $item->getData();
                    $i++;
                    echo "<tr class='trTable'>
                    <td>";
                        imageProducts($bread3['image'], $bread3['name']);
                    echo "<td>
                        <div class='flexColumn'>
                            <p class='size20'>". $bread3['name'] ."</p>
                            <p>". $bread3['description'] ."</p>   

                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td><p class='bold size20'>". $bread3['price'] ."</p>
                        <p>". $bread3['weight'] ." / Kg</p>   
                    </td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td class='bold size20'>". $bread3['price'] ."</td>
                    <td><button class='send width65'><i class='fas fa-plus'></i></button></td>
                </tr>";
                }
                ?>
            </table>
        </div>
        <div id="choiceBread4" class="flexColumn">
            <?php
            bakerDelivery(4, $bakerDeliveryManager, $deliveryDate);
            ?>
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
                $breads4 = $breadManager->getByBaker(4);
                $i = 0;
                foreach ($breads4 as $item) {
                    $bread4 = $item->getData();
                    $i++;
                    echo "<tr class='trTable'>
                    <td>";
                        imageProducts($bread4['image'], $bread4['name']);
                    echo "<td>
                        <div class='flexColumn'>
                            <p class='size20'>". $bread4['name'] ."</p>
                            <p>". $bread4['description'] ."</p>   

                            <div class='flexRow'>
                                <button class='buttonClassic'><i class='far fa-heart'></i></button>
                            </div>
                        </div>
                    </td>
                    <td><p class='bold size20'>". $bread4['price'] ."</p>
                        <p>". $bread4['weight'] ." / Kg</p>   
                    </td>
                    <td>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                    </td>
                    <td class='bold size20'>". $bread4['price'] ."</td>
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
                $breads1 = $breadManager->getByBaker(1);
                $i = 0;
                foreach ($breads1 as $item) {
                $bread1 = $item->getData();
                $i++;
                    echo "<div class='flexRow cartResponsive'>
                    <div>";
                        imageProducts($bread1['image'], $bread1['name']);
                    echo "</div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p class='size20 bold'>" . $bread1['name'] ."</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>". $bread1['description'] ."</p>
                        <p class='size20 bold'>". $bread1['price'] ." € /</p>
                        <span>". $bread1['weight'] ." Kg</span>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p class='size20 bold'>". $bread1['price'] ."</p>
                    </div>
                </div>";
                }
                ?>
            </div>
                <div id="choiceBreadResponsive2">
                    <?php
                    foreach ($breads2 as $item) {
                        $bread2 = $item->getData();
                        $i++;
                        echo "<div class='flexRow cartResponsive'>
                    <div>";
                        imageProducts($bread2['image'], $bread2['name']);
                    echo "</div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p class='size20 bold'>" . $bread2['name'] ."</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>". $bread2['description'] ."</p>
                        <p class='size20 bold'>". $bread2['price'] ." € /</p>
                        <span>". $bread2['weight'] ." Kg</span>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p class='size20 bold'>". $bread2['price'] ."</p>
                    </div>
                </div>";
                    }
                    ?>
                </div>
                    <div id="choiceBreadResponsive3">
                        <?php
                        foreach ($breads3 as $item) {
                            $bread3 = $item->getData();
                            $i++;
                            echo "<div class='flexRow cartResponsive'>
                    <div>";
                            imageProducts($bread3['image'], $bread3['name']);
                    echo "</div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p class='size20 bold'>" . $bread3['name'] ."</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>". $bread3['description'] ."</p>
                        <p class='size20 bold'>". $bread3['price'] ." € /</p>
                        <span>". $bread3['weight'] ." Kg</span>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p class='size20 bold'>". $bread3['price'] ."</p>
                    </div>
                </div>";
                        }
                        ?>
                    </div>
                        <div id="choiceBreadResponsive4">
                            <?php
                            foreach ($breads4 as $item) {
                                $bread4 = $item->getData();
                                $i++;
                                echo "<div class='flexRow cartResponsive'>
                    <div>";
                        imageProducts($bread4['image'], $bread4['name']);
                    echo "</div>
                    <div class='flexColumn infoCart'>
                        <div class='flexRow flexCenter'>
                            <p class='size20 bold'>" . $bread4['name'] ."</p>
                            <button class='buttonClassic favoriteArticleCart'><i class='far fa-heart'></i></button>
                            <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                        </div>
                        <p>". $bread4['description'] ."</p>
                        <p class='size20 bold'>". $bread4['price'] ." € /</p>
                        <span>". $bread4['weight'] ." Kg</span>
                        <div class='flexRow flexCenter'>
                            <button class='buttonClassic less1'>-</button>
                            <p class='numberArticle numberArticle1'>1 </p>
                            <button class='buttonClassic more1'>+</button>
                        </div>
                        <p class='size20 bold'>". $bread4['price'] ."</p>
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
                </div>
                <div class="flexColumn flexCenter">
                    <input name="phone" class="inputBread margin20" type="text" placeholder="Téléphone">
                    <input id="dateInput" name="date" class="inputBread margin20" type="date">
                </div>
                <input id="validateReservedBread" type="submit" class="brownBorder flexCenter modifyProfil" value="Valider la réservation">
            </form>
        </div>
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";