
 let nbClick = 0;
 $("#products").click( function () {
    if (nbClick === 0) {
        $("#scrolling_menu_produits").css("display", "flex");
        nbClick++;
    }
    else {
        $("#scrolling_menu_produits").css("display", "none");
        document.getElementById("scrolling_menu_produits").addEventListener("mouseleave", function () {
            document.getElementById("scrolling_menu_produits").style.display = "none";
        })
        nbClick = 0;
    }
});

