<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

if (isset($_SESSION["user"]['mail']) && isset($_SESSION["user"]['pass'])) {
    $title = "LPST : Mon compte";
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

    $managerUser = new UserManager();
    $users = $managerUser->getAllUser();
    $count = count($users);
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    else {
        $page = 1;
    }
    ?>

    <main class="flexRow account">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menuAccount.php";
        ?>
        <section>
            <div id="baskets_favorite">
                <h2 class="subtitle">Mes paniers sauvegardés</h2>
                <table id="tableBaskets" class="flexCenter">
                    <tr class="titleTable">
                        <th class="colorWhite">Article</th>
                        <th class="colorWhite">Nom de l'article</th>
                        <th class="colorWhite">Prix</th>
                        <th class="colorWhite">Ajouter au panier</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo "<tr class='trTable'>
                        <td><img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'></td>
                        <td>
                            <div class='flexColumn'>
                                <p>Nom de l'article</p>
                                <div class='flexRow'>
                                    <button id='addToWishlist1' class='buttonClassic'><i class='far fa-heart'></i></button>
                                    <button class='favoriteDelete buttonClassic'><i class='far fa-trash-alt'></i></button>
                                </div>
                            </div>
                        </td>
                        <td><strong>Prix €</strong></td>
                        <td>
                            <button class='send width65'><i class='fas fa-shopping-basket'></i></button>
                        </td>
                    </tr>";
                    }
                    ?>
                </table>

                <!-- Displayed when the screen is at 830px -->
                <div id="cartResponsive" class="flexColumn">
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
                            <p>Prix €</p>
                            <div class='flexCenter'>
                                <button class='send'><i class='fas fa-shopping-basket'></i></button>
                            </div>
                        </div>
                    </div>";
                    }
                    ?>
                </div>

                <div class="separatorHorizontal"></div>
                <h2 class="subtitle">Mes articles favoris</h2>
                <div class="flexRow" id="containerFavorite">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo "<div class='wishlist flexCenter flexColumn'>
                        <img class='imgTable' alt='wishlistPhoto' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                        <p class='colorBlue'>Nom de l'article</p>
                        <span><strong>Prix €</strong></span>
                        <div class='flexRow'>
                            <button id='addToCart1' class='buttonClassic'><i class='fas fa-shopping-basket'></i></button>
                            <button class='buttonClassic favoriteDelete'><i class='far fa-trash-alt'></i></button>
                        </div>
                    </div>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>


    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
