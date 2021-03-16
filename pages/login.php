<?php
session_start();
$title = "LPST : Connexion";
$return = "";
 if(isset($_GET['e'])){
     if ($_GET['e'] = 0){
         $return = "<div id='error0' class='modal flexCenter colorWhite'>Problème lors du transfert des données <button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>";
     }
     elseif ($_GET['e'] = 1){
         $return = "<div id='error0' class='modal flexCenter colorWhite'>Le mail et le mot de passe ne correspondent pas<button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>";
     }
 }
 elseif (isset($_GET['s'])){
     $return = "<div id='success' class='modal flexCenter colorWhite'>connection réussit <button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>";
 }
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main>

    <h1>Se <span class="colorGreen">connecter</></h1>
    <div><?= $return?></div>
    <form action="../assets/php/connection.php" method="post" class="flexColumn" name="login">
        <div class="flexColumn contact">
            <label for="emailContact" class="colorBlue">Email*</label>
            <input id="emailContact" type="email" name="emailContact" required>
        </div>
        <div class="flexColumn contact">
            <label for="password" class="colorBlue">Mot de passe*</label>
            <input type="password" id="password" name="password" required>
        </div>
        <a class="flexCenter colorBlue underline margin15-30" href="#">Mot de passe oublié ?</a>
        <input class="send" type="submit" value="Se connecter">
        <a href="registration.php" class="flexCenter brownBorder"> Créer un compte</a>
    </form>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";