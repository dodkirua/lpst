<?php
session_start();
$title = "LPST : Cosmétique";

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/InformationManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";


$manager = new InformationManager();
$informations = $manager->getInformationByLocation("cosmetic.php");
?>
    <main>
        <h1 class="colorBlue">COSMÉ<span class="colorGreen">TIQUE</span></h1>
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
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";