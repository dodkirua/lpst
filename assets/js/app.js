
/** let nbClick = 0;
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
*/

document.getElementById("menuProducts").addEventListener("mouseenter", function () {
    document.getElementById("scrolling_menu_produits").style.display = "flex";
})

document.getElementById("menuProducts").addEventListener("mouseleave", function () {
    document.getElementById("scrolling_menu_produits").style.display = "none";
})
