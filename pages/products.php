<?php
$title = "LPST : Nos produits";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";
?>

    <main>
        <img id="ab" alt="agriculture biologique" src="https://tse1.mm.bing.net/th?id=OIP.3QWnaffLUCiOBRPJx7wvPgHaI7&pid=Api&P=0&w=300&h=300">
        <img id="biomonde" src="/assets/img/Logo%20Biomonde-rond-01.png">
        <h1>NOS <span class="colorGreen">PRODUITS</span></h1>
        <div class="flexRow allProducts">
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="fruits et légumes" src="../assets/img/fruits_et_legumes.png" >
                </div>
                <p class="colorBlue">Fruits et légumes</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="épicerie salée" src="../assets/img/epicerie_salee.png" >
                </div>
                <p class="colorBlue">Epicerie salée</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="épicerie sucrée" src="../assets/img/epicerie_sucree.png" >
                </div>
                <p class="colorBlue">Epicerie sucrée</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="rayon frais" src="../assets/img/rayon_frais.png" >
                </div>
                <p class="colorBlue">Rayon frais</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="cosmétique" src="../assets/img/cosmetique.png" >
                </div>
                <p class="colorBlue">Cosmétique</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="hygiène" src="../assets/img/hygiene.png" >
                </div>
                <p class="colorBlue">Hygiène</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="bien-être" src="../assets/img/bien_etre.png" >
                </div>
                <p class="colorBlue">Bien-être</p>
            </a>
            <a href="#" class="products flexColumn">
                <div class="blueBorder">
                    <img class="productsImage" alt="entretien maison" src="../assets/img/entretien_maison.png" >
                </div>
                <p class="colorBlue">Entretien maison</p>
            </a>
        </div>

    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";