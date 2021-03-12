<?php

$title = "LPST : Mon compte";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main class="flexRow">
    <h1 id="hello">Bonjour, <span class="colorGreen">.....</span></h1>
    <section id="informationProfil">
        <div id="profil" class="flexColumn flexCenter">
            <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
            <p class="nameStaff colorBlue">Prénom NOM</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div class="select">
            <p class="colorWhite">Mes informations</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div class="select">
            <p class="colorWhite">Mes commandes</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div class="select">
            <p class="colorWhite">Mes paniers sauvegardés</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div class="select">
            <p class="colorWhite">Mes paramètres</p>
        </div>

    </section>

    <section id="otherInformation">
        <div id="informationAccount">
            <h2 class="subtitle"> Mes coordonées</h2>
            <div class="flexColumn flexCenter">
                <img class="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
                <p class="colorBlue">Prénom </p>
                <p class="whiteBorder">(Prénom)</p>
                <p class="colorBlue">Nom </p>
                <p class="whiteBorder">(Nom)</p>
                <p class="colorBlue">Email </p>
                <p class="whiteBorder">(prenom.nom@mail.com)</p>
                <div class="flexCenter">
                    <button id="modifyPorfil" class="send modify">Modifier le profil</button>
                </div>
            </div>
            <div class="separatorHorizontal"></div>
            <h2 class="subtitle"> Mes adresses</h2>
            <h3 class="colorGrey "> Adresse de facturation</h3>
            <h3 class="colorGrey"> Adresse de livraison</h3>

            <div class="separatorHorizontal"></div>
            <div class="flexColumn">
                <h2 class="subtitle"> Changer mon mot de passe</h2>
                <label class="colorBlue" for="currentPwd">Mon mot de passe actuel</label>
                <input id="currentPwd" name="currentPwd" type="password">
                <label class="colorBlue" for="newPwd">Mon nouveau mot de passe</label>
                <input name="newPwd" id="newPwd" type="password">
                <div class="flexCenter">
                    <button id="modifypwd" class="send modify">Valider</button>
                </div>
            </div>

            <div class="flexCenter">
                <button class="redButton">Déconnexion</button>
            </div>
        </div>

    </section>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
