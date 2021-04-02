<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

if (isset($_POST["currentPwd"]) && isset($_POST["password"]) && isset($_POST["repeatPassword"])) {
    $currentPass = sanitize($_REQUEST['currentPwd']);
    $newPass = sanitize($_REQUEST['password']);
    $verifPass = sanitize($_POST["repeatPassword"]);

    if (password_verify($currentPass, $_SESSION["user"]["pass"])) {
        echo "ils correspondent";
        if ($newPass === $verifPass){
            if (checkPass($newPass)){

            }
            else {
                header('Location: ../../pages/account.php?e=3');
            }
        }
        else {
            header('Location: ../../pages/account.php?e=2');
        }
    }
    else{
        header('Location: ../../pages/account.php?e=1');
    }
}
else {
    header('Location: ../../pages/account.php?e=0');
}
