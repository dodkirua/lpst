<?php
session_start();
$title = "LPST : Notre magasin";

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/InformationManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

$manager = new InformationManager();
$managerUser = new UserManager();
$informations = $manager->getInformationByLocation("index.php");
$users = $managerUser->getStaff();
?>

<main>
    <div id="mobile" class="flexCenter flexColumn">
        <p id="magasinMobile" class="buttonMobile flexColumn"><i class="fas fa-store"></i> Notre magasin</p>
        <a class="buttonMobile flexColumn" href="/pages/shopping.php"><i class="fas fa-shopping-basket"></i>Epicerie en ligne</a>
    </div>

    <div id="computer">
        <h1>NOTRE <span class="colorGreen">MAGASIN</span></h1>
        <?php
                $token = true;
                foreach ($informations as $item) {
                    $information = $item->getData();
                    if ($token) {
                        containerShop1($information["image"], $information["title"], $information["description"]);
                        if (isset($_SESSION["user"]["id"])) {
                            if ($_SESSION['user']['role'] != 2) {
                                echo "<button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                <button class='buttonClassic'><i class='fas fa-edit'></i></button>";
                            }
                        }
                        else {
                            echo "";
                        }
                    }
                    else {
                        containerShop2($information["image"], $information["title"], $information["description"]);
                        if (isset($_SESSION["user"]["id"])) {
                            if ($_SESSION['user']['role'] !== 2) {
                                echo "<button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                <button class='buttonClassic'><i class='fas fa-edit'></i></button>";
                            }
                        }
                    }
                    $token = !$token;
                }
            ?>

        <h1>NOTRE <span class="colorGreen">PERSONNEL</span></h1>
        <div id="containerStaff" class="flexRow">
            <?php
            foreach ($users as $item) {
                $user = $item->getData();
                $firstname = str_replace(" ", "-", ucwords(str_replace("-", " ", $user["firstname"])));
                staff($user["image"],$firstname);
            }
            ?>
        </div>

        <div class="flexRow about">
            <iframe width="50%" height="450px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/carte-sans-nom_582445?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>            <div class="flexColumn informations">
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-map-marker-alt descriptionIcon"></i>La Boutique Les Pieds sur Terre</h3>
                    <p class="information">23 rue Jean Pierre Dupont, 59610 FOURMIES</p>
                    <?php
                    if (isset($_SESSION["user"]["id"])) {
                        if ($_SESSION['user']['role'] !== 2) {
                            echo "<button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                  <button class='buttonClassic'><i class='fas fa-edit'></i></button>";
                        }
                    }
                    ?>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-phone-alt descriptionIcon"></i>Téléphone</h3>
                    <p class="information">07 49 47 20 08</p>
                    <?php
                    if (isset($_SESSION["user"]["id"])) {
                        if ($_SESSION['user']['role'] !== 2) {
                            echo "<button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                  <button class='buttonClassic'><i class='fas fa-edit'></i></button>";
                        }
                    }
                    ?>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-envelope descriptionIcon"></i>Mail</h3>
                    <a class="colorGreen underline information" href="./pages/contact.php">Nous contacter</a>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-truck descriptionIcon"></i>Horaires de livraison</h3>
                    <p class="information"><strong>jours</strong></p>
                    <p class="information">Heures - heures</p>
                    <?php
                    if (isset($_SESSION["user"]["id"])) {
                        if ($_SESSION['user']['role'] !== 2) {
                            echo "<button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                  <button class='buttonClassic'><i class='fas fa-edit'></i></button>";
                        }
                    }
                    ?>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-store descriptionIcon"></i>Horaires du magasin</h3>
                    <p class="information"><strong>du mardi au vendredi</strong></p>
                    <p class="information">09:30 - 12:30 / 14:30 - 18:30</p>
                    <p class="information"><strong>du samedi</strong></p>
                    <p class="information">09:00 - 12:30 / 14:30 18:00</p>
                    <?php
                    if (isset($_SESSION["user"]["id"])) {
                        if ($_SESSION['user']['role'] !== 2) {
                            echo "<button class='buttonClassic'><i class='far fa-trash-alt'></i></button>
                                  <button class='buttonClassic'><i class='fas fa-edit'></i></button>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";