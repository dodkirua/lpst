<?php


include $_SERVER['DOCUMENT_ROOT'] . "/assets/php/function.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/Manager/UserManager.php";

if (isset ($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['emailContact']) || isset($_POST['password']) || isset($_POST['repeatPassword'])){
    $firstname = sanitize($_REQUEST['firstname']);
    $lastname = sanitize($_REQUEST['lastname']);
    $mail = sanitize($_REQUEST['emailContact']);
    $pass = sanitize($_REQUEST['password']);
    $passRepeat = sanitize($_REQUEST['repeatPassword']);

    $user = new UserManager();
    $user->addUser($lastname,$firstname,$mail,$pass);
}
else {
    echo "erreur lors du formulaire";
}