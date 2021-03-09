
// Browse the menu with a 'mouseenter', to display a drop-down menu and disappear with a 'mouseover'.
document.getElementById("menuProducts").addEventListener("mouseenter", function () {
    document.getElementById("scrolling_menu_produits").style.display = "flex";
});

document.getElementById("menuProducts").addEventListener("mouseleave", function () {
    document.getElementById("scrolling_menu_produits").style.display = "none";
});


let allArticle = [
    {"imageSrc" : "https://o.remove.bg/downloads/0681b99a-2ef4-422a-87f1-f0a19d3c3904/th-removebg-preview.png", "name" : "Pomme", "description" : "description", "price" : "prix", "unit" : "unité"},
    ];

for (let i = 0; i < allArticle.length; i++) {
    $("#allArticle").append(
        "<div class='flexColumn containerArticle'>" +
            "<img class='articleImage' src='"+ allArticle[i].imageSrc +"' alt='article'>" +
            "<span class='articleName'>" + allArticle[i].name + "</span>" +
            "<p class='articleDescription'>" + allArticle[i].description + "</p>" +
            "<div class='number'>" +
                "<button class='minusPrice'><i class=\"fas fa-minus\"></i></button>" +
                "<input value='1' class='articleNumber' type='number'>" +
                "<button class='addPrice'><i class=\"fas fa-plus\"></i></button>" +
            "</div>" +
            "<div class='flexRow'>" +
                "<span class='articlePrice'>" + allArticle[i].price + " € <span class='articleUnit'> / " + allArticle[i].unit + " </span></span>" +
                "<button class='addCart'><i class=\"fas fa-plus\"></i></button>" +
            "</div>" +
        "</div>"
    );
}