<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

$title = "LPST : Connexion";
$return = "";
$id = "";
 if(isset($_GET['e'])){
     $id = "error";
     switch ($_GET['e']){
         case '0':
         $return = "Problème lors du transfert des données ";
         break;
         case '1':
         $return = "Le mail et le mot de passe ne correspondent pas";
         break;
         case '2':
         $return = "Problème sur le lien verifier votre mail d'activation";
         break;
     }
 }
 elseif (isset($_GET['s'])){
     $id = "success";
     $return = "connection réussit";
 }
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

?>

<main>
    <h1>Se <span class="colorGreen">connecter</></h1>
    <div id='<?= $id?>' class='modal2 flexCenter colorWhite'><?= $return?><button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>
    <form action="../php/connection.php" method="post" class="flexColumn" name="login">
        <div class="flexColumn contact">
            <label for="emailContact" class="colorBlue">Email*</label>
            <input id="emailContact" type="email" name="emailContact" required>
        </div>
        <div class="flexColumn contact">
            <label for="password" class="colorBlue">Mot de passe*</label>
            <input type="password" id="password" name="password" required>
        </div>
        <a class="flexCenter colorBlue underline margin15-30" href="forgotPassword.php">Mot de passe oublié ?</a>
        <input class="send" type="submit" value="Se connecter">
        <a href="registration.php" class="flexCenter brownBorder"> Créer un compte</a>
    </form>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";