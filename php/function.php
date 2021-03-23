<?php
/**
 * secure the data for insert in DB
 * @param string $data
 * @return String
 */
function sanitize(string $data) : String {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);
    return $data;
}

/**
 * for preformat array in test
 * @param $text
 */
function pre($text){
    echo "<pre>";
    var_dump($text);
    echo "<pre>";
}

function containerShop1 (string $image, string $alt, string $text) {
    echo "<div class='flexCenter'  id='containerShop1'>
<img class='shop' alt='". $alt . "' src='". $image . "'>
<p class='description colorBlue'>$text</p>
</div>";
}

function containerShop2 (string $image, string $alt, string $text) {
    echo "<div class='flexCenter'  id='containerShop2'>
<p class='description colorBlue'>$text</p>
<img class='shop' alt='". $alt . "' src='". $image . "'>
</div>";
}

function staff (string $alt, string $image, string $firsntame) {
    if ($image === "" || $image === null) {
        $image = "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png";
    }
        echo "<div class='staff flexColumn flexCenter'>
        <img alt='" . $alt . "' class='staffPhoto' src='" . $image . "'>
        <p class='nameStaff colorBlue'>" . $firsntame . " </p>
        </div>";
}