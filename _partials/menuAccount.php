<?php
$firstname = str_replace(" ", "-", ucwords(str_replace("-", " ", $_SESSION["user"]["firstname"])));
$lastname = str_replace(" ", "-", ucwords(str_replace("-", " ", $_SESSION["user"]["lastname"])));

?>
<section id="informationProfil">
        <div id="profil" class="flexColumn flexCenter">
            <?php
            if ($_SESSION["user"]["role"] !== 2) {
                foreach ($users as $item) {
                    $user = $item->getData();
                    if ($_SESSION["user"]["id"] === $user["id"])
                    staff("../".$user["image"],"");
                }
            }
            ?>
            <p class="nameStaff colorBlue"><?= $firstname . " " . $lastname ?></p>
<div class="flexCenter">
    <button id="disconnection" class="redButton disconnection">Déconnexion</button>
</div>
</div>
<div id="informationProfil2">
    <div class="separatorHorizontal"></div>
    <div id="information" class="select selectComputer">
        <a href="../pages/account.php" class="colorWhite">Mes informations</a>
    </div>
    <div class="separatorHorizontal"></div>
    <div id="ordered" class="select selectComputer">
        <a href="../pages/ordered.php" class="colorWhite">Mes commandes</a>
    </div>
    <div class="separatorHorizontal"></div>
    <div id="basketsSave" class="select selectComputer">
        <a href="../pages/basketsFavorite.php" class="colorWhite">Mes paniers sauvegardés</a>
    </div>
    <?php
    if ($_SESSION["user"]["role"] === 1) {
        ?>
        <div class="separatorHorizontal"></div>
        <div id="userManagement" class="select selectComputer backgroundBlue2">
            <a href="../pages/userManagement.php" class="colorWhite">Gestion des utilisateurs</a>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="storeManagement" class="select selectComputer backgroundBlue2">
            <a href="../pages/storeManagement.php" class="colorWhite">Gestion de notre magasin / nos partenaires locaux</a>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="productManagement" class="select selectComputer backgroundBlue2">
            <p class="colorWhite">Gestion de nos produits</p>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="shopManagement" class="select selectComputer backgroundBlue2">
            <a href="../pages/shopManagement.php" class="colorWhite">Gestion de l'epicerie en ligne</a>
        </div>
        <div class="separatorHorizontal"></div>
        <div id="breadManagement" class="select selectComputer backgroundBlue2">
            <a href="../pages/breadManagement.php" class="colorWhite">Gestion de réservation de pain</a>
        </div>
        <?php
    }
    ?>
</div>

<!-- Displayed when the screen is at 681px -->
<button id="disconnectionResponsive" class="redButton disconnection"><i class="fas fa-power-off"></i></button>

</section>