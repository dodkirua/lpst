<header>
    <img id="coverPicture" src="../doc/mockup/fond.png" alt="Les pieds sur terre">

    <?php
    if (isset($_SESSION["user"]['id'])) {
        ?>
        <div class="log3">
            <a class="buttonClassic log4" href="../pages/account.php"><i class="fas fa-user-circle"></i></a>
            <a class="buttonClassic log4" href="../pages/buy_cart.php"><i class="fas fa-shopping-basket"></i></a>
            <button class="redButton log4 disconnection"><i class="fas fa-power-off"></i></button>
        </div>
    <?php
    }
    else {
        ?>
        <div class="log">
            <a class="colorBlue underline" href="../pages/login.php">Se connecter</a>
            <span> ou </span>
            <a class="colorBlue underline" href="../pages/registration.php">Créer un compte</a>
        </div>
    <?php
    }
    ?>

    <div id="menu" class="flexRow flexCenter">
        <img id="lpstLogo" src="../doc/mockup/lpst.png" alt="Logo LPST">
        <a id="commerce" class="containedMenu flexCenter" href="../index.php"> Notre magasin</a>
        <div class="separatorVertical"></div>
        <a id="products" class="containedMenu flexCenter" href="../pages/products.php"> Nos produits</a>
        <div class="separatorVertical"></div>
        <a id="local" class="containedMenu flexCenter" href="../pages/local.php"> Nos partenaires locaux</a>
        <div class="separatorVertical"></div>
        <a id="account" class="containedMenu flexCenter" href="../pages/shopping.php"> Epicerie en ligne</a>
        <div class="separatorVertical"></div>
        <a id="reserveBread" class="containedMenu flexCenter" href="../pages/reserveBread.php"> Réservation de pain</a>
    </div>

    <div id="menuResponsive" class="flexRow flexCenter">
        <a id="bars" href="#"><i class="fas fa-bars"></i></a>
        <img id="lpstLogoResponsive" src="../doc/mockup/lpst.png" alt="Logo LPST">
    </div>
    <div id="scrollMenu" class="flexCenter flexColumn">
        <a id="commerce" class="containedMenu flexCenter" href="../index.php"> Notre magasin</a>
        <a id="products" class="containedMenu flexCenter" href="../pages/products.php"> Nos produits</a>
        <a id="local" class="containedMenu flexCenter" href="../pages/local.php"> Nos partenaires locaux</a>
        <a id="account" class="containedMenu flexCenter" href="../pages/shopping.php"> Epicerie en ligne</a>
        <a id="reserveBread" class="containedMenu flexCenter" href="../pages/reserveBread.php"> Réservation de pain</a>


        <?php
        if (isset($_SESSION["user"]['id'])) {
            ?>
            <div class="log2">
                <a class="containedMenu flexCenter colorWhite" href="../pages/account.php">Mon compte</a>
                <a class="containedMenu flexCenter colorWhite" href="../pages/buy_cart.php">Mon panier</a>
                <div class="flexCenter">
                    <button class="containedMenu flexCenter colorWhite redButton disconnection">Déconnexion</button>
                </div>
            </div>
            <?php
        }
        else {
            ?>
            <div class="log2 center">
                <a class="colorWhite linkLog" href="../pages/login.php">Se connecter</a>
                <span> / </span>
                <a class="colorWhite linkLog" href="../pages/registration.php">Créer un compte</a>
            </div>
            <?php
        }
        ?>

    </div>
</header>