<?php
$title = "LPST : Inscription";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
$return = "";
$id = "";
if (isset($_GET['e'])){
    $id = "error";
    switch ($_GET['e']){
        case '0':
            $return = "Problème lors de l'envoi des données du formulaire.";
            break;
        case '1':
            $return = "Mot de passe et le mot de passe de vérification ne sont pas identique.";
            break;
        case '2':
            $return = "L'adresse mail est deja dans la base de donnée.";
            break;
        case '3':
            $return = "Le mot de passe ne suis pas les spécifications demandées.";
            break;
        case '4':
            $return = "Veuillez recommencer la procédure d'inscription erreur lors de la validation du mail";
            break;
    }
}
elseif (isset($_GET['s'])){
    $id = "success";
    $return = "Merci pour votre inscription, veuillez valider votre mail";
}
?>

<main>
    <h1>Créer <span class="colorGreen"> un compte</></h1>
    <div id='<?= $id?>' class='modal2 flexCenter colorWhite'><?= $return?><button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>
    <form action="../php/addUser.php" method="post" class="flexColumn" name="registration" id = "registration">
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
            <div id="pwMsg">
                <span id="maj" class="colorRed2">Une majuscule</span>
                <span id="min" class="colorRed2">Une minuscule</span>
                <span id="char" class="colorRed2">Un caractère spéciale</span>
                <span id="number" class="colorRed2">Un chiffre</span>
                <span id="length" class="colorRed2">10 caractères minimum</span>
            </div>
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
