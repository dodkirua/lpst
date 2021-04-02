<?php
session_start();

$_SESSION['information'] = [];
$title = "LPST : Nos partenaires locaux";

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/InformationManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

$manager = new InformationManager();
$informations = $manager->getInformationByLocation("local.php");
?>

<main>
    <h1>NOS <span class="colorGreen">PARTENAIRES LOCAUX</span></h1>
    <?php
    $i = 0;
    $token = true;
    foreach ($informations as $item) {
        $information = $item->getData();
        $_SESSION['information'][$i] = $information;
        if ($token) {
            containerShop1($information["image"], $information["title"], $information["description"]);
            if (isset($_SESSION["user"]["id"])) {
                if ($_SESSION['user']['role'] != 2) {
                    echo "<a href='deleteLocal.php?id=$i' class='buttonClassic'><i class='far fa-trash-alt'></i></a>
                         <a href='modifyLocal.php?id=$i' class='buttonClassic'><i class='fas fa-edit'></i></a>";
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
                    echo "<a href='deleteLocal.php?id=$i' class='buttonClassic'><i class='far fa-trash-alt'></i></a>
                         <a href='modifyLocal.php?id=$i' class='buttonClassic'><i class='fas fa-edit'></i></a>";
                }
            }
        }
        $i++;
        $token = !$token;
    }
    ?>
</main>


<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
