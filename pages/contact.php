<?php
$title = "LPST : Conatct";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

    <main>
        <h1>Nous <span class="colorGreen">Contacter</span></h1>
        <form action="#" method="post" class="flexColumn" name="Contact">
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
                <label for="emailContact" class="colorBlue">Email*</label>
                <input id="emailContact" type="email" name="emailContact" required>
            </div>
            <div class="flexColumn contact">
                <label for="phoneNumber" class="colorBlue">Numéro de téléphone*</label>
                <input id="phoneNumber" type="tel" name="phoneNumber" required>
            </div>
            <div class="flexColumn contact">
                <label for="message" class="colorBlue">Message*</label>
                <textarea id="message" name="message"></textarea>
            </div>

            <input class="send" type="submit" value="Envoyer">
        </form>
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";
