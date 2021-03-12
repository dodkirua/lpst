<?php

$title = "LPST : Mon compte";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main class="flexRow">
    <h1 id="hello">Bonjour, <span class="colorGreen">.....</span></h1>
    <section id="informationProfil">
        <div id="profil" class="flexColumn flexCenter">
            <img id="photoProfil" src="http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png" alt="photoProfil">
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
        <p> Mes informations ...</p>
    </section>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
