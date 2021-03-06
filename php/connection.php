<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";


if (!isset($_POST['emailContact']) || !isset($_POST['password'])) {
    header('Location: ../../pages/login.php?e=0');

}
else {
    $mail = sanitize($_POST['emailContact']);
    $pass = sanitize($_POST['password']);
    $userManager = new UserManager();
    $user = $userManager->testConnection($mail, $pass);
    if (is_null($user)) {
        header('Location: ../../pages/login.php?e=1');

    }
    else {
        $userArray = $user->getData();
        foreach ($userArray as $key => $item) {
            $_SESSION["user"]["$key"] = $item;
        }
        header('Location: ../../pages/account.php?s=1');
    }
}

