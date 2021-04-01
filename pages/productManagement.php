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
            <section id="otherInformation" class="flexCenter flexColumn">
                <h2 class="subtitle">Ajouter une description</h2>
                <form action="#" method="post" class="width_70 flexColumn">
                    <input class="whiteBorder2 margin5-0 width_100" placeholder="Titre" type="text" name="titleStore">
                    <input class="whiteBorder2 margin5-0 width_100" type="file" name="imageStore">
                    <span class="margin15-30">Dans:</span>
                    <select class="width_70 size15 margin20">
                        <option value="fruits_vegetables.php">Fruits et légumes</option>
                        <option value="saltyGroceries.php">Epicerie salée</option>
                        <option value="sweetGroceries.php">Epicerie sucrée</option>
                        <option value="freshSection.php">Rayon frais</option>
                        <option value="cosmetic.php">Cosmétique</option>
                        <option value="hygiene.php">Hygiène</option>
                        <option value="well-being.php">Bien-être</option>
                        <option value="houseMaintenance.php">Entretien maison</option>
                    </select>

                    <textarea class="whiteBorder2 margin5-0 width_100" placeholder="Description" name="descriptionStore"></textarea>
                    <input class="send modify modifyProfil" type="submit" value="Ajouter">
                </form>
            </section>
        </div>
    </main>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
