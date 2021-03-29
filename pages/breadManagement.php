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
                <h2 class="subtitle">Ajouter une boulangerie</h2>
                <form action="#" method="post" class="flexColumn flexCenter">
                    <input class="whiteBorder2 margin5-0" placeholder="Nom de la boulangerie" type="text" name="nameBeaker">
                    <input class="whiteBorder2 margin5-0" placeholder="Adresse de la boulangerie" type="text" name="addressBeaker">
                    <input class="send modify modifyProfil" type="submit" value="Ajouter">
                </form>

            </section>
        </div>
    </main>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
