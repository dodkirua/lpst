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
            <div id="informationAccount">
                <h2 class="subtitle"> Mes coordonnées</h2>
                <div id="pdp" class="flexCenter flexColumn">
                    <?php
                    if ($_SESSION["user"]["role"] !== 2) {
                        foreach ($users as $item) {
                            $user = $item->getData();
                            if ($_SESSION["user"]["id"] === $user["id"])
                                staff("../".$user["image"],"");
                        }
                        echo "<button id='clickModifyPdp' class='send modify modifyProfil'>Modifier pdp</button>";
                    }
                    ?>
                </div>
                <div id="profilImageModify">
                    <form method="post" action="#" class="flexCenter flexColumn width_100">
                        <input type="file" name="profilePicture" id="profilePicture" class="whiteBorder">
                        <input class="send modifyProfil modify" type="submit" value="Modifier">
                    </form>
                </div>
                <div id="contactInformationModify" >
                    <form id="modifyInformation" action="#" method="post" class="flexColumn flexCenter">
                        <label for="firstnameModify" class="colorBlue center margin15-30">Prénom </label>
                        <input id="firstnameModify" name="firstnameModify" class="whiteBorder" value="<?= $firstname ?>" type="text">
                        <label for="lastnameModify" class="colorBlue center margin15-30">Nom </label>
                        <input id="lastnameModify" name="lastnameModify" class="whiteBorder" value="<?= $lastname ?>" type="text">
                        <label for="emailModify" class="colorBlue center margin15-30">Email </label>
                        <input id="emailModify" name="emailModify" class="whiteBorder" value="<?= $_SESSION["user"]["mail"] ?>" type="text">
                        <input type="submit" id="modifyInformation2" class="send modify modifyProfil" value="Enregistrer les modifications">
                    </form>
                </div>
                <div id="contactInformation" class="flexColumn flexCenter">
                    <p class="colorBlue">Prénom </p>
                    <p class="whiteBorder"><?= $firstname ?></p>
                    <p class="colorBlue">Nom </p>
                    <p class="whiteBorder"><?= $lastname ?></p>
                    <p class="colorBlue">Email </p>
                    <p class="whiteBorder"><?= $_SESSION["user"]["mail"] ?></p>
                    <button id="modifyProfil" class="send modify modifyProfil">Modifier le profil</button>
                </div>

                <div class="separatorHorizontal"></div>
                <div class="flexColumn">
                    <h2 class="subtitle"> Mes informations personnelles</h2>
                    <div class="padding30 flexCenter flexColumn">
                            <?php
                            if ($_SESSION["user"]["phone"] === null || $_SESSION["user"]["phone"] === "") {
                                echo " <div id='phone' class='flexCenter flexColumn'>
                                        <p class='colorBlue'>Téléphone</p>
                                    <p class='whiteBorder padding30 width_100'></p>
                                    <button id='clickPhone' class='send flexCenter modify modifyProfil'>Ajouter un téléphone </button>
                                    </div>
                                    <form action='#' method='post' id='modifyPhone' class='flexColumn flexCenter'>
                                            <label class='colorBlue'>Téléphone</label>
                                            <input class='whiteBorder width_100' type='tel' value=''>
                                            <input id='validatePhone' class='send modify modifyProfil' type='submit' value='Valider'>
                                       </form>";
                            }
                            else {
                                echo " <div id='phone' class='flexCenter flexColumn'>
                                        <p class='colorBlue'>Téléphone</p>
                                    <p id='containerPhone' class='whiteBorder width_100'>" . $_SESSION['user']['phone'] . "</p>
                                    <button id='clickPhone' class='send flexCenter modify modifyProfil'>Modifier </button>
                                    </div>
                                    <form action='#' method='post' id='modifyPhone' class='flexColumn flexCenter'>
                                            <label class='colorBlue'>Téléphone</label>
                                            <input class='whiteBorder width_100' type='tel' value='" . $_SESSION['user']['phone'] . "'>
                                            <input id='validatePhone' class='send modify modifyProfil' type='submit' value='Valider'>
                                       </form>";
                            }
                            ?>
                    </div>
                </div>

                <div class="separatorHorizontal"></div>
                <div class="flexColumn">
                    <h2 class="subtitle"> Mes adresses</h2>
                    <div class="padding30">
                        <h3 class="colorGrey inputBuy"> Adresse de facturation</h3>
                        <div id="containerBillingAddress" class="width_100 flexRow">

                        </div>
                        <div class="flexCenter">
                            <button id="addBillingAddress" class="send modify modifyProfil flexRow align" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle size20 leftIcon"></i>Ajouter une adresse de facturation</button>
                        </div>
                        <h3 class="colorGrey inputBuy"> Adresse de livraison</h3>
                        <div id="containerDeliveryAddress" class="width_100 flexRow">

                        </div>
                        <div class="flexCenter">
                            <button id="addDeliveryAddress" class="send modify modifyProfil flexRow align" data-bs-toggle="modal" data-bs-target="#modalDeliveryAddress"><i class="fas fa-plus-circle size20 leftIcon"></i>Ajouter une adresse de livraison</button>
                        </div>
                    </div>
                </div>

                <div class="separatorHorizontal"></div>
                <div class="flexColumn">
                    <h2 class="subtitle"> Changer mon mot de passe</h2>
                    <form action="#" method="post" class="flexCenter flexColumn">
                        <label class="colorBlue" for="currentPwd">Mon mot de passe actuel</label>
                        <input id="currentPwd" name="currentPwd" type="password">
                        <label class="colorBlue" for="newPwd">Mon nouveau mot de passe</label>
                        <input name="newPwd" id="newPwd" type="password">
                            <button id="modifypwd" class="send modify">Valider</button>
                    </form>

                </div>
            </div>
        </section>
    </div>
</main>

    <!-- Modal billing address -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title subtitle" id="staticBackdropLabel">Ajout d'une adresse de facturation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  action="../php/addAddress.php" method="post" class="flexColumn flexCenter width_100">
                        <input type="hidden" value="0" name="delivery">
                        <label for="addressName" class="colorBlue center margin15-30">Nom de l'adresse </label>
                        <input id="addressName" name="addressName" class="whiteBorder width_100" type="text">
                        <label for="firstname" class="colorBlue center margin15-30">Prénom </label>
                        <input id="firstname" name="firstname" class="whiteBorder width_100" type="text">
                        <label for="lastname" class="colorBlue center margin15-30">Nom </label>
                        <input id="lastname" name="lastname" class="whiteBorder width_100" type="text">
                        <label for="num_street" class="colorBlue center margin15-30" >N° et nom de la voie </label>
                        <div class="flexRow">
                            <input id="num_street" name="num" class="whiteBorder width30" type="text" placeholder="10">
                            <input id="num_street" name="street" class="whiteBorder width65" type="text" placeholder="rue des blés">
                        </div>
                        <p id="complements" class="underline"><i class="fas fa-plus leftIcon"></i>Compléments (bâtiments, étages)</p>
                        <div id="input_complements">
                            <input name="floor" class="whiteBorder width_100" type="text" placeholder="4e étage">
                            <input name="num_door" class="whiteBorder width_100" type="text" placeholder="porte 24">
                            <input name="complements" class="whiteBorder width_100" type="text" placeholder="compléments">
                        </div>
                        <label for="country" class="colorBlue center margin15-30">Pays </label>
                        <input id="country" name="firstname" class="whiteBorder width_100" type="text">
                        <label for="postalCode" class="colorBlue center margin15-30">Code postal </label>
                        <input id="postalCode" name="postalCode" class="whiteBorder width_100" type="text">
                        <label for="city" class="colorBlue center margin15-30">Ville </label>
                        <input id="city" name="city" class="whiteBorder width_100" type="text">
                        <label for="phone" class="colorBlue center margin15-30">Téléphone </label>
                        <input id="phone" name="phone" class="whiteBorder width_100" type="tel">
                        <input type="submit" id="modifyInformation2" class="send modify modifyProfil" value="Enregistrer">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="redButton" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal delivery address -->
    <div class="modal fade" id="modalDeliveryAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title subtitle" id="staticBackdropLabel">Ajout d'une adresse de livraison</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  action="../php/addAddress.php" method="post" class="flexColumn flexCenter width_100">
                        <input type="hidden" value="1" name="delivery">
                        <label for="addressName" class="colorBlue center margin15-30">Nom de l'adresse </label>
                        <input id="addressName" name="addressName" class="whiteBorder width_100" type="text">
                        <label for="firstname" class="colorBlue center margin15-30">Prénom </label>
                        <input id="firstname" name="firstname" class="whiteBorder width_100" type="text">
                        <label for="lastname" class="colorBlue center margin15-30">Nom </label>
                        <input id="lastname" name="lastname" class="whiteBorder width_100" type="text">
                        <label for="num_street" class="colorBlue center margin15-30" >N° et nom de la voie </label>
                        <div class="flexRow">
                            <input id="num_street" name="num" class="whiteBorder width30" type="text" placeholder="10">
                            <input id="num_street" name="street" class="whiteBorder width65" type="text" placeholder="rue des blés">
                        </div>
                        <p id="complements2" class="underline"><i class="fas fa-plus leftIcon"></i>Compléments (bâtiments, étages)</p>
                        <div id="input_complements2">
                            <input name="floor" class="whiteBorder width_100" type="text" placeholder="4e étage">
                            <input name="num_door" class="whiteBorder width_100" type="text" placeholder="porte 24">
                            <input name="complements" class="whiteBorder width_100" type="text" placeholder="compléments">
                        </div>
                        <label for="country" class="colorBlue center margin15-30">Pays </label>
                        <input id="country" name="firstname" class="whiteBorder width_100" type="text">
                        <label for="postalCode" class="colorBlue center margin15-30">Code postal </label>
                        <input id="postalCode" name="postalCode" class="whiteBorder width_100" type="text">
                        <label for="city" class="colorBlue center margin15-30">Ville </label>
                        <input id="city" name="city" class="whiteBorder width_100" type="text">
                        <label for="phone" class="colorBlue center margin15-30">Téléphone </label>
                        <input id="phone" name="phone" class="whiteBorder width_100" type="tel">
                        <input type="submit" id="modifyInformation2" class="send modify modifyProfil" value="Enregistrer">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="redButton" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
