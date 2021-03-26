<?php

require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

if (isset ($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['emailContact']) || isset($_POST['password']) || isset($_POST['repeatPassword'])){
    $firstname = sanitize($_REQUEST['firstname']);
    $lastname = sanitize($_REQUEST['lastname']);
    $mail = sanitize($_REQUEST['emailContact']);
    $pass = sanitize($_REQUEST['password']);
    $passRepeat = sanitize($_REQUEST['repeatPassword']);

    if ($pass === $passRepeat){
        $pass = password_hash($pass,PASSWORD_BCRYPT );
        if (checkPass($pass)){
            $user = new UserManager();
            $id = $user->searchMail($mail);
            if (is_null($id)){
                $user->addUser($lastname,$firstname,$mail,$pass);
            }
            else {
                header('Location: ../../pages/registration.php?e=2');
            }
        }
        else {
            header('Location: ../../pages/registration.php?e=3');
        }
    }
    else {
        header('Location: ../../pages/registration.php?e=1');
    }
    header('Location: ../../pages/registration.php?s=1');

}
else {
    header('Location: ../../pages/registration.php?e=0');
}