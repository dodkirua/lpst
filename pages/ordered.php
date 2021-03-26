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
            <div id="orderedAccount">
                <h2 class="subtitle">Mes commandes</h2>
                <table id="tableOrdered" class="flexCenter">
                    <tr class="titleTable">
                        <th class="colorWhite">Date</th>
                        <th class="colorWhite">Article</th>
                        <th class="colorWhite">Nom de l'article</th>
                        <th class="colorWhite">Prix</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo "<tr class='trTable'>
                            <td> 00/00/0000</td>
                            <td><img alt='articlePhoto' class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'></td>
                            <td>Nom de l'article</td>
                            <td><strong>Prix €</strong></td>
                        </tr>";
                    }
                    ?>
                </table>

                <!-- Displayed when the screen is at 830px -->
                <div id="orderedResponsive">
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo "<div class='containerOrdered flexColumn'>
                            <p>Livraison du 00/00/0000</p>
                            <div class='flexRow infoArticle'>
                                <img class='imgTable' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                                <div class='infoCart flexCenter'>
                                    <p class='margin'>Nom de l'article</p>
                                    <p class='margin'><strong>Prix €</strong></p>
                                </div>
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
