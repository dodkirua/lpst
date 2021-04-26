<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";
$firstname = "";
$lastname = "";
$return = "";
$id = "";
if (isset($_GET['e'])){
    $id = "error";
    switch ($_GET['e']){
        case '0':
            $return = "Problème lors de l'envoi des données du formulaire.";
            break;
        case '1':
            $return = "L'ancien mot de passe ne correspond pas";
            break;
        case '2':
            $return = "le nouveau mot de passe et le mot de passe de vérification ne corresponde pas";
            break;
        case '3':
            $return = "Le mot de passe ne suis pas les spécifications demandées.";
            break;
        case '4':
            $return = "Erreur lors de la modification des données recommencer merci.";
            break;
        case '5':
            $return = "Le mot de passe actuel et le nouveau mot de passe sont identique";
            break;
    }
}
elseif (isset($_GET['s'])){
    $id = "success";
    switch ($_GET['s']){
        case 1:
            $return = "Vous êtes bien connecté";
            break;
        case 2:
            $return = "Le mot de passe a bien été changé";
            break;
        case 3:
            $return = "Numéro de téléphone changer avec succès";
            break;

    }

}

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
    <div id='<?= $id?>' class='modal2 flexCenter colorWhite'><?= $return?><button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>

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
                                $phone = "";
                            }
                            else {
                                $phone = $_SESSION['user']['phone'];
                            }
                            echo " <div id='phone' class='flexCenter flexColumn'>
                                    <p class='colorBlue'>Téléphone</p>
                                <p id='containerPhone' class='whiteBorder width_100'>$phone</p>
                                <button id='clickPhone' class='send flexCenter modify modifyProfil'>Modifier </button>
                                </div>
                                <form action='../php/modifyPhone.php' method='post' id='modifyPhone' class='flexColumn flexCenter'>
                                        <label class='colorBlue'>Téléphone</label>
                                        <input class='whiteBorder width_100' name='tel' value='$phone'>
                                        <input id='validatePhone' class='send modify modifyProfil' type='submit' value='Valider'>
                                   </form>";

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
                    <form action="../php/modifyPassword.php" method="post" class="flexCenter flexColumn" id= "registration">
                        <label class="colorBlue" for="currentPwd">Mon mot de passe actuel</label>
                        <input id="currentPwd" name="currentPwd" type="password">
                        <div class="flexColumn contact width_100">
                            <label for="passwordRegistration" class="colorBlue">Nouveau Mot de passe*</label>
                            <input type="password" id="passwordRegistration" name="password" class="whiteBorder2" required>
                            <div id="pwMsg">
                                <span id="maj" class="colorRed2">Une majuscule</span>
                                <span id="min" class="colorRed2">Une minuscule</span>
                                <span id="char" class="colorRed2">Un caractère spéciale</span>
                                <span id="number" class="colorRed2">Un chiffre</span>
                                <span id="length" class="colorRed2">10 caractères minimum</span>
                            </div>
                        </div>
                <div class="flexColumn contact width_100">
                    <label for="repeatPassword" class="colorBlue">Répéter le mot de passe*</label>
                    <input type="password" id="repeatPassword" name="repeatPassword" class="whiteBorder2" required>
                    <div id="pwMsgRepeat"></div>
                </div>
                        <button id="modifypwd" class="send modify">Valider</button>
                    </form>

                    <form action="#" method="post" class="flexCenter flexColumn">
                        <button id="deleteAccount" class="redButton modify">Supprimer mon compte</button>
                    </form>

                </div>
            </div>
        </section>
    </div>
</main>

    <!-- Modal billing address -->
    <?php
    $title = "Ajout d'une adresse de facturation";
    $delivery = 0;
    $idModal = 'staticBackdrop';
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/addressModal.php";
    ?>


    <!-- Modal delivery address -->
    <?php
    $title = "Ajout d'une adresse de livraison";
    $delivery = 1;
    $idModal = 'modalDeliveryAddress';
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/addressModal.php";
    ?>


<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}
