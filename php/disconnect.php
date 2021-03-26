<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";
$_SESSION = [];
session_destroy();

$title = "LPST : Déconnexion";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

<div class="forgotPassword">
    <h2 class="subtitle">Vous êtes bien déconnecté</h2>

    <a href="../index.php" class="colorBlue underline">< Retour</a>
</div>


