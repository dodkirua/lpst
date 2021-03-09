
// Browse the menu with a 'mouseenter', to display a drop-down menu and disappear with a 'mouseover'.
document.getElementById("menuProducts").addEventListener("mouseenter", function () {
    document.getElementById("scrolling_menu_produits").style.display = "flex";
});

document.getElementById("menuProducts").addEventListener("mouseleave", function () {
    document.getElementById("scrolling_menu_produits").style.display = "none";
});