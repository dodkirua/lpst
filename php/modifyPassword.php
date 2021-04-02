<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";
$id = $_SESSION['user']['id'];
$manager = new UserManager();
if (isset($_POST["currentPwd"]) && isset($_POST["password"]) && isset($_POST["repeatPassword"])) {
    $currentPass = sanitize($_REQUEST['currentPwd']);
    $newPass = sanitize($_REQUEST['password']);
    $verifPass = sanitize($_POST["repeatPassword"]);

    if (password_verify($currentPass, $_SESSION["user"]["pass"])) {
        echo "ils correspondent";
        if ($newPass === $verifPass){
            if (password_verify($newPass, $_SESSION["user"]["pass"])) {
                if (checkPass($newPass)) {
                    $pass = password_hash($newPass, PASSWORD_BCRYPT);
                    if ($manager->modifyPass($id, $pass)) {
                        header('Location: ../../pages/account.php?s=2');
                    } else {
                        header('Location: ../../pages/account.php?e=4');
                    }
                } else {
                    header('Location: ../../pages/account.php?e=3');
                }
            }
            else {
                header('Location: ../../pages/account.php?e=5');
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
