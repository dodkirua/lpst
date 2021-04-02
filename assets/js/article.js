/**
 * function which allows to increase or decrease the quantity of the article while decreasing or increasing the total price.
 * @param priceArticle
 * @param idQuantity
 * @param idPrice
 * @param total
 * @param idMore
 * @param idLess
 */
export function itemQuantity (priceArticle, idQuantity, idPrice, total, idMore, idLess) {
    for (let i = 0; i < 2; i++) {
        let idQuant = document.getElementsByClassName(idQuantity);
        let numberArticle1 = idQuant[i].innerHTML;
        let valueArticle1 = Number.parseInt(numberArticle1);
        let totalPrice = document.getElementsByClassName(total)[i];

        document.getElementsByClassName(idMore)[i].addEventListener("click", function () {
            let priceA = document.getElementById(priceArticle).value;
            console.log(priceA);
            let price = parseFloat(priceA);
            let addArticle = parseFloat(priceA);
            totalPrice.innerHTML = "<strong>" + (price += addArticle).toFixed(2) + "€ </strong>";
            numberArticle1 = valueArticle1 += 1;
            idQuant = numberArticle1;
        });

        document.getElementsByClassName(idLess)[i].addEventListener("click", function () {
            let price = document.getElementById(priceArticle).value;
            let addArticle = price;
            if (numberArticle1 === "1" || numberArticle1 <= "1") {
                totalPrice.innerHTML = "<strong>" + price.toFixed(2) + "€ </strong>";
                document.getElementsByClassName(idQuantity)[i].innerHTML = "1";
            }
            else {
                totalPrice.innerHTML = "<strong>" + (price -= addArticle).toFixed(2) + "€ </strong>";
                numberArticle1.innerHTML = valueArticle1 -= 1;
            }
        });
    }
}