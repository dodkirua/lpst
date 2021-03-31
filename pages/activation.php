<?php

session_start();
$title = "LPST : activation du compte";

require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

$userManager = new UserManager();
if (isset($_GET['e'])){
    $id = "error";
    switch ($_GET['e']){
        case '0':
            $return = "Problème .";
            break;

    }
}
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
                <h2 class='subtitle'>Vous mail est bien validé</h2>
            
                <a href='./login.php' class='colorBlue underline'>< Retour</a>
                </div>";
        }
        else{
            $userManager->delUser($id);
            header($_SERVER['DOCUMENT_ROOT'] . "/pages/registration.php?e=4");
        }
    }
    else {
        $userManager->delUser($id);
        header($_SERVER['DOCUMENT_ROOT'] . "index.php?e=4");
    }


}


function e(): void
{
    include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
}

e();