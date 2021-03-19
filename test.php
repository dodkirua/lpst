<?php
require "./assets/Classes/php/Manager/UserManager.php";

$user = new UserManager();




$test2 = $user->searchMail("toto@laville.fr");

echo $test2;