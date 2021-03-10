<?php
$title = "LPST accueil";

include $_SERVER['DOCUMENT_ROOT'] . "/_partials/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/menu.php";

?>

    <main>
        <h1>NOTRE MAGASIN</h1>
        <div class="flexCenter">
            <img id="storefront" alt="Deventure du magasin" src="/assets/img/devanture_magasin.png">
        </div>
        <p class="description colorBlue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, animi architecto asperiores blanditiis consectetur doloremque facilis fugiat molestias nihil nostrum optio quas quisquam quo recusandae rerum sint sunt suscipit, voluptatem?</p>

        <div class="flexRow about">
            <iframe width="50%" height="450px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/fr/map/carte-sans-nom_574897?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            <div class="flexColumn">
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-map-marker-alt descriptionIcon"></i>La Boutique Les Pieds sur Terre</h3>
                    <p>23 rue Jean Pierre Dupont, 59610 FOURMIES</p>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-phone-alt descriptionIcon"></i>Téléphone</h3>
                    <p>07 49 47 20 08</p>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-envelope descriptionIcon"></i>Mail</h3>
                    <a class="colorGreen underlineMail" href="mailto:contact@lpst.fr">contact@lpst.fr</a>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-truck descriptionIcon"></i>Horaires de livraison</h3>
                    <p><strong>jours</strong></p>
                    <p>Heures - heures</p>
                </div>
                <div class="margin15-30 colorGreen">
                    <h3><i class="fas fa-store descriptionIcon"></i>Horaires du magasin</h3>
                    <p><strong>du mardi au vendredi</strong></p>
                    <p>09:30 - 12:30 / 14:30 - 18:30</p>
                    <p><strong>du samedi</strong></p>
                    <p>09:00 - 12:30 / 14:30 18:00</p>
                </div>
            </div>
        </div>


    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/_partials/footer.php";

