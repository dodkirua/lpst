<?php
$title = "LPST Nos produits";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

?>

    <main>
        <h1>Nos produits</h1>

        <div class="flexRow">
            <a class="menuLink" href="#">Tous</a>
            <a class="menuLink" href="#">Actualités</a>
            <a class="menuLink" href="#">Alimentation</a>
            <a class="menuLink" href="#">Beauté & Bien-être</a>
            <a class="menuLink" href="#">Hygiène</a>
            <a class="menuLink" href="#">Maison</a>
        </div>

        <h2> Tous les produits</h2>
        <div id="allArticle">

        </div>
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";