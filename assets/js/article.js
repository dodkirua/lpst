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
        let price = priceArticle;
        let addArticle = priceArticle;
        let idQuant = document.getElementsByClassName(idQuantity);
        console.log(idQuant);
        let numberArticle1 = idQuant[i].innerHTML;
        let valueArticle1 = Number.parseInt(numberArticle1);
        let totalPrice = document.getElementsByClassName(total)[i];
        totalPrice.innerHTML = "<strong>" + price + "€ </strong>";
        document.getElementsByClassName(idPrice)[i].innerHTML = "<strong>" + price + "€ </strong>";

        document.getElementsByClassName(idMore)[i].addEventListener("click", function () {
            totalPrice.innerHTML = "<strong>" + (price += addArticle).toFixed(2) + "€ </strong>";
            numberArticle1 = valueArticle1 += 1;
        });

        document.getElementsByClassName(idLess)[i].addEventListener("click", function () {
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