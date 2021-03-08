
 let nbClick = 0;
 $("#products").click( function () {
    if (nbClick === 0) {
        $("#scrolling_menu_produits").css("display", "flex");
        nbClick++;
    }
    else {
        $("#scrolling_menu_produits").css("display", "none");
        nbClick = 0;
    }
});

