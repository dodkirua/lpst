<?php
$title = "LPST : Inscription";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main>
    <h1>Créer <span class="colorGreen"> un compte</></h1>
    <form action="../assets/php/addUser.php" method="post" class="flexColumn" name="registration" id = "registration">
        <div class="flexColumn contact">
            <div class="flexRow nameContact">
                <div class="flexColumn contact">
                    <label for="firstname" class="colorBlue">Prénom</label>
                    <input id="firstname" type="text" name="firstname" required>
                </div>
                <div class="flexColumn contact">
                    <label for="lastname" class="colorBlue">Nom</label>
                    <input id="lastname" type="text" name="lastname" required>
                </div>
            </div>
            <label for="emailContact" class="colorBlue">Email*</label>
            <input id="emailContact" type="email" name="emailContact" required>
        </div>
        <div class="flexColumn contact">
            <label for="passwordRegistration" class="colorBlue">Mot de passe*</label>
            <input type="password" id="passwordRegistration" name="password" required>
            <div id="pwMsg"></div>
        </div>
        <div class="flexColumn contact">
            <label for="repeatPassword" class="colorBlue">Répéter le mot de passe*</label>
            <input type="password" id="repeatPassword" name="repeatPassword" required>
            <div id="pwMsgRepeat"></div>
        </div>
        <input class="send" type="submit" value="S'enregistrer">
        <a href="login.php" class="flexCenter brownBorder">Déjà un compte ?</a>
    </form>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";