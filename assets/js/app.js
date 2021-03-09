
// Browse the menu with a 'mouseenter', to display a drop-down menu and disappear with a 'mouseover'.
document.getElementById("menuProducts").addEventListener("mouseenter", function () {
    document.getElementById("scrolling_menu_produits").style.display = "flex";
});

document.getElementById("menuProducts").addEventListener("mouseleave", function () {
    document.getElementById("scrolling_menu_produits").style.display = "none";
});


let allArticle = [
    {"imageSrc" : "https://o.remove.bg/downloads/0681b99a-2ef4-422a-87f1-f0a19d3c3904/th-removebg-preview.png", "name" : "Pomme", "description" : "description", "price" : "prix"},
    ];

for (let i = 0; i < allArticle.length; i++) {
    $("#allArticle").append(
        "<div class='flexColumn containerArticle'>" +
        "<img src='"+ allArticle[i].imageSrc +"'>" +
        "<span class='articleName'>" + allArticle[i].name + "</span>" +
        "<p class='articleDescription'>" + allArticle[i].description + "</p>" +
        "<span class='articlePrice'>" + allArticle[i].price + " € </span> "+
        "<button class='addCart'><i class=\"fas fa-plus\"></i></button>" +
        "</div>"
    );
}