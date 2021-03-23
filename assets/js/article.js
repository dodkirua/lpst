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
        const idQuantity = document.getElementsByClassName(idQuantity);
        let numberArticle1 =
        numberArticle1 = numberArticle1[i].innerHTML;
        let valueArticle1 = Number.parseInt(numberArticle1);
        let totalPrice = document.getElementsByClassName(total)[i];
        totalPrice.innerHTML = "<strong>" + price + "€ </strong>";
        document.getElementsByClassName(idPrice)[i].innerHTML = "<strong>" + price + "€ </strong>";

        document.getElementsByClassName(idMore)[i].addEventListener("click", function () {
            totalPrice.innerHTML = "<strong>" + (price += addArticle).toFixed(2) + "€ </strong>";
            document.getElementsByClassName(idQuantity)[i].innerHTML = valueArticle1 += 1;
        });

        document.getElementsByClassName(idLess)[i].addEventListener("click", function () {
            if (document.getElementsByClassName(idQuantity)[i].innerHTML === "1" || document.getElementsByClassName(idQuantity)[i].innerHTML <= "1") {
                totalPrice.innerHTML = "<strong>" + price.toFixed(2) + "€ </strong>";
                document.getElementsByClassName(idQuantity)[i].innerHTML = 1;
            }
            else {
                document.getElementsByClassName(total)[i].innerHTML = "<strong>" + (price -= addArticle).toFixed(2) + "€ </strong>";
                document.getElementsByClassName(idQuantity)[i].innerHTML = valueArticle1 -= 1;
            }
        });
    }
}