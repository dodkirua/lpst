<?php
$title = "LPST : Connexion";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

    <main>
        <h1>Se <span class="colorGreen">connecter</></h1>
        <form action="#" method="post" class="flexColumn" name="login">
            <div class="flexColumn contact">
                <label for="emailContact" class="colorBlue">Email*</label>
                <input id="emailContact" type="email" name="emailContact" required>
            </div>
            <div class="flexColumn contact">
                <label for="password" class="colorBlue">Mot de passe*</label>
                <input type="password" id="password" name="password">
            </div>
            <a class="flexCenter colorBlue underline margin15-30" href="#">Mot de passe oublié ?</a>
            <input class="send" type="submit" value="Se connecter">
            <a href="registration.php" class="flexCenter brownBorder"> Créer un compte</a>
        </form>
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";