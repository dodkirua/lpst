<?php
session_start();

$title = "LPST : Epicerie en ligne";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

<main>
    <h1>EPICERIE <span class="colorGreen">EN LIGNE</span></h1>
    <div class="flexRow colorBlue size20">
        <div class="width30" id="shopProducts">
            <p class="subtitle">Rayons</p>
            <div class="separatorHorizontal"></div>
            <div class="padding30 width_100">
                <a class="colorBlue underline" href="#">Tous les produits</a>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Fruits et légumes</strong></a>
                    <p id="clickArrow1" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_fruits_vegetables" class="width_100 flexColumn">
                    <?php
                    $menuFruitsVegetables = ["Fruits", "Légumes", "Aromates", "Fruits secs conditionnées"];
                    sort($menuFruitsVegetables);

                    foreach ($menuFruitsVegetables as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Epicerie salée</strong></a>
                    <p id="clickArrow2" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_salty_groceries" class="width_100 flexColumn">
                <?php
                $menuSaltyGroceries = ["Biscuits", "Céréales", "Chips", "Bouillons", "Huiles et condiments", "Epices", "Sels", "Riz", "Pâtes", "Semoules", "Sauces", "Soupes"];
                sort($menuSaltyGroceries);

                foreach ($menuSaltyGroceries as $item) {
                    echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                }
                ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Epicerie sucrée</strong></a>
                    <p id="clickArrow3" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_sweet_groceries" class="width_100 flexColumn">
                    <?php
                    $menuSweetGroceries = ["Biscuits", "Barres", "Biscottes", "Chocolat", "Confiseries", "Confitures et gelées", "Corn flakes", "Croustillant", "Desserts végétaux", "Galettes de riz et de céréales", "Sirops", "Sucres", "Viennoiseries", "Souffles"];
                    sort($menuSweetGroceries);

                    foreach ($menuSweetGroceries as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Rayon frais</strong></a>
                    <p id="clickArrow4" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_fresh_section" class="width_100 flexColumn">
                    <?php
                    $menufreshSection = ["Boissons", "Desserts", "Divers", "Oeufs", "Pâtes à tarte", "Pâtes fraiches", "Produits sans gluten", "Produits sans lactose", "Traiteur", "Yaourts végétaux"];
                    sort($menufreshSection);

                    foreach ($menufreshSection as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Cosmétique</strong></a>
                    <p id="clickArrow5" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_cosmetic" class="width_100 flexColumn">
                    <?php
                    $menuCosmetic = ["Accessoires", "Démaquillants", "Eaux florales", "Homme", "Huiles", "Maquillage", "Parfum / Déodorants", "Soin des mains", "Soins du visage"];
                    sort($menuCosmetic);

                    foreach ($menuCosmetic as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Hygiène</strong></a>
                    <p id="clickArrow6" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_hygiene" class="width_100 flexColumn">
                    <?php
                    $menuHygiene = ["Cheveux", "Cotons", "Dentifrices / Brosses à dents", "Protection / Hygiène féminine", "Savons", "Soins du corps"];
                    sort($menuHygiene);

                    foreach ($menuHygiene as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Bien-être</strong></a>
                    <p id="clickArrow7" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_well-being" class="width_100 flexColumn">
                    <?php
                    $menuWellBeing = ["Accessoires", "Démaquillants", "Eaux florales", "Homme", "Huiles", "Maquillage", "Parfum / Déodorants", "Soin des mains", "Soins du visage"];
                    sort($menuWellBeing);

                    foreach ($menuWellBeing as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="flexColumn align width_100 padding30">
                <div class="flexRow width_100">
                    <a class="colorBlue underline" href="#"><strong>Entretien maison</strong></a>
                    <p id="clickArrow8" class="arrowRight"><i class="fas fa-angle-down priceDelivery underline"></i></p>
                </div>
                <div id="menu_house_maintenance" class="width_100 flexColumn">
                    <?php
                    $menuHouseMaintenance = ["Désodorisants", "Droguerie", "Encens", "Matériel de cuisine", "Nettoyants", "Papier", "Produits lessiviels", "Produits vaisselles", "Sanitaires", "Sols / Surfaces", "Vaisselles"];
                    sort($menuHouseMaintenance);

                    foreach ($menuHouseMaintenance as $item) {
                        echo "<a class='colorBlue underline containerOrdered' href='#'>$item</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="width_70 flexRow" id="buyArticle">
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
    </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";