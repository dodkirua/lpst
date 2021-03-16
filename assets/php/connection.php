<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/Manager/UserManager.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/php/function.php";
$root = $_SERVER["SERVER_NAME"] .":".$_SERVER["SERVER_PORT"] ;

if (!isset($_POST['emailContact']) || !isset($_POST['password'])) {
    header('Location: ' . $root . "/pages/login.php?e=0");

}
else {
    $mail = sanitize($_POST['emailContact']);
    $pass = sanitize($_POST['password']);
    $userManager = new UserManager();
    $user = $userManager->testConnection($mail, $pass);
    var_dump($user);
    /*if (is_null($user)) {
        header('Location: ' . $root . "/pages/login.php?e=1");

    } else {
        $userArray = $user->getBaseData();
        foreach ($userArray as $key => $item) {
            $_SESSION["$key"] = $item;
        }
        header('Location: ' . $root . "/pages/login.php?s=1");
    }*/
}

