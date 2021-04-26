<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/UserManager.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";
$id = $_SESSION['user']['id'];
$manager = new UserManager();


if (isset($_POST["tel"])) {
    $phone = sanitize($_POST["tel"]);
    if ($manager->modifyPhone($id,$phone)){
        $_SESSION['user']['phone'] = $phone;
        header('Location: ../../pages/account.php?s=3');
    }
    else{
        header('Location: ../../pages/account.php?e=4');
    }
}
else {
    header('Location: ../../pages/account.php?e=0');
}
