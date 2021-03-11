<?php
if (isset ($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['emailContact']) || isset($_POST['password']) || isset($_POST['repeatPassword'])){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $mail = $_REQUEST['emailContact'];
    $pass = $_REQUEST['password'];
    $passRepeat = $_REQUEST['repeatPassword'];
}