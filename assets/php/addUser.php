<?php


include $_SERVER['DOCUMENT_ROOT'] . "/assets/php/function.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/Manager/UserManager.php";

if (isset ($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['emailContact']) || isset($_POST['password']) || isset($_POST['repeatPassword'])){
    $firstname = sanitize($_REQUEST['firstname']);
    $lastname = sanitize($_REQUEST['lastname']);
    $mail = sanitize($_REQUEST['emailContact']);
    $pass = sanitize($_REQUEST['password']);
    $passRepeat = sanitize($_REQUEST['repeatPassword']);
    if ($pass === $passRepeat){
        $pass = password_hash($pass,PASSWORD_BCRYPT );
        $user = new UserManager();
        $user->addUser($lastname,$firstname,$mail,$pass);
    }
    else {
        header('Location: ../../pages/registration.php?e=2');
    }
    header('Location: ../../pages/registration.php?s=1');

}
else {
    header('Location: ../../pages/registration.php?e=1');
}