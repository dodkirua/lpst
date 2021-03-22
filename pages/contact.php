<?php
session_start();
$title = "LPST : Contact";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

if (isset($_GET['e'])) {
    echo "<div id='error0' class='modal2 flexCenter colorWhite'> Il y a eu une erreur lors de l'envoie du mail ! <button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>";
}
elseif (isset($_GET["s"])) {
    echo "<div id='success' class='modal2 flexCenter colorWhite'> Le mail a été envoyé avec succés ! <button id='closeModal' class='buttonClassic'><i class='fas fa-times'></i></button></div>";
}
?>

<main>
    <h1>Nous <span class="colorGreen">Contacter</span></h1>
    <form action="../php/sendMail.php" method="post" class="flexColumn" name="Contact">
        <div class="flexRow nameContact">
            <div class="flexColumn contact">
                <label for="firstname" class="colorBlue">Prénom</label>
                <input id="firstname" type="text" name="firstname">
            </div>
            <div class="flexColumn contact">
                <label for="lastname" class="colorBlue">Nom</label>
                <input id="lastname" type="text" name="lastname">
            </div>
        </div>
        <div class="flexColumn contact">
            <label for="subject" class="colorBlue">Subject*</label>
            <input id="subject" type="text" name="subject" required>
        </div>
        <div class="flexColumn contact">
            <label for="emailContact" class="colorBlue">Email*</label>
            <input id="emailContact" type="email" name="emailContact" required>
        </div>
        <div class="flexColumn contact">
            <label for="message" class="colorBlue">Message*</label>
            <textarea id="message" name="message"></textarea>
        </div>

        <input id="sendContact" class="send" type="submit" value="Envoyer">
    </form>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
