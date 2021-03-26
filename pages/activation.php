<?php

session_start();
$title = "LPST : activation du compte";

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

$userManager = new UserManager();
if (!isset($_GET['log']) || !isset($_GET['key'])) {
    header('Location: ../../pages/login.php?e=2');
}
else {
    $id = $_GET['log'];
    $key = $_GET['key'];
    $date = new DateTime();
    $date = $date->getTimestamp();
    $user = $userManager->getUserById($id);
    if ($user->getKey() === $key){
        if ($user->getDate() <= $date && $date > 0 ){
            $user->setChecked(1);
            $user->setKey(null);
            $user->setDate(null);
            echo "<div class='forgotPassword'>
                <h2 class='subtitle'>Vous êtes bien déconnecté</h2>
            
                <a href='../index.php' class='colorBlue underline'>< Retour</a>
                </div>";
        }
        else{
            header($_SERVER['DOCUMENT_ROOT'] . "forgotPassword.php?e=0");
        }
    }
    else {
        header($_SERVER['DOCUMENT_ROOT'] . "forgotPassword.php?e=0");
    }


}


include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";