<?php
session_start();
$title = "LPST : Fruits et légumes";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>
    <main>
        <h1 class="colorBlue">FRUITS ET <span class="colorGreen">LÉGUMES</span></h1>
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";