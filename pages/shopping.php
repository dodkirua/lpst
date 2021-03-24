<?php
session_start();

$title = "LPST : Epicerie en ligne";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main>
    <h1>EPICERIE <span class="colorGreen">EN LIGNE</span></h1>
    <div class="flexRow" id="shopProducts">
    <?php
    for ($i = 0; $i < 40; $i++) {
        echo "<div class='wishlist flexColumn backgroundBlue margin15-30 articleProduct'>
                        <img class='imgTable width_100' alt='wishlistPhoto' src='https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164'>
                        <p class='colorGreen size20 center'><strong>Nom de l'article</strong></p>
                        <span class='colorGrey linkLog margin5-0'>Description</span>
                        <div class='flexRow flexCenter margin5-0'>
                            <p class='nameStaff'><strong>Prix €</strong></p>
                            <button class='buttonBlue margin20 colorWhite favoriteDelete'><i class='fas fa-cart-plus'></i></button>
                        </div>
                    </div>";
    }
    ?>
    </div>
</main>

<?php

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";