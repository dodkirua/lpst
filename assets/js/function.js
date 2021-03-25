/**
 * close the modal windows.
 * @param idModal
 */
export function closeModal (idModal) {
    document.getElementById("closeModal").addEventListener("click", function () {
        document.getElementById(idModal).style.display = "none";
    });
}

/**
 * Allows an element to appear and then disappear thanks to the number of clicks.
 * @param idClick
 * @param id1
 */
export function numberOfClick (idClick, id1) {
    let nbClick = 0;
    $(idClick).click(function () {
        if (nbClick === 0) {
            $(id1).css("display", "flex");
            nbClick++;
        }
        else {
            $(id1).css("display", "none");
            nbClick = 0;
        }
    });
}