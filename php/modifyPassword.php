<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

if (isset($_POST["currentPwd"], $_POST["newPwd"])) {
    $currentPass = sanitize($_REQUEST['currentPwd']);
    $newPass = sanitize($_REQUEST['newPwd']);

    if (password_verify($currentPass, $_SESSION["user"]["pass"])) {
        echo "ils correspondent";
        //modifier le mdp dans la BDD par le nouveau mdp entrer.
    }
}
