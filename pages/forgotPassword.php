<?php
$title = "LPST : Mot de passe oublié";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
?>

<div class="forgotPassword">
    <h2 class="subtitle">Mot de passe oublié</h2>

    <form action="#" method="post" class="flexCenter flexColumn">
        <label for="email" class="colorBlue margin15-30">Email*</label>
        <input id="email" type="email" name="email" required>
        <input type="submit" value="Envoyer" class="send margin15-30 modifyProfil">
    </form>
    <a href="login.php" class="colorBlue underline">< Retour</a>
</div>

