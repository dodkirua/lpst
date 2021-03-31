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
        <div class="flexColumn width65">
            <h1 id="hello">Bonjour, <span class="colorGreen"><?=$firstname . " " . $lastname ?> !</span></h1>
            <section id="otherInformation">
                <h2 class="subtitle">Ajouter un rayon</h2>
                <form action="#" method="post" class="flexColumn flexCenter">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom du rayon" type="text" name="nameRay">
                    <input class="send modify modifyProfil" type="submit" value="Ajouter">
                </form>

                <h2 class="subtitle">Ajouter un sous-rayon</h2>
                <form action="#" method="post" class="flexColumn flexCenter">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom de son rayon" type="text" name="nameRay">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom du sous-rayon" type="text" name="nameSubRay">
                    <input class="send modify modifyProfil" type="submit" value="Ajouter">
                </form>

                <h2 class="subtitle">Ajouter un article</h2>
                <form action="#" method="post" class="flexColumn flexCenter">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom de l'article" type="text" name="name">
                    <textarea class="whiteBorder2 margin5-0" placeholder="Description" name="description"></textarea>
                    <input class="whiteBorder2 margin5-0" placeholder="Prix" type="text" name="price">
                    <input class="whiteBorder2 margin5-0" placeholder="Code de l'article" type="text" name="nameRay">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom de son rayon" type="text" name="nameRay">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom du sous-rayon" type="text" name="nameSubRay">
                    <input class="send modify modifyProfil" type="submit" value="Ajouter">
                </form>

            </section>
        </div>
    </main>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
