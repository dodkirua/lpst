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

function staff (?string $image, string $firstname) {
    if ($image === "" || $image === null) {
        $image = "http://www.clker.com/cliparts/d/L/P/X/z/i/no-image-icon-md.png";
    }
    echo "<div class='staff flexColumn flexCenter'>
    <img alt='" . $firstname . "' class='staffPhoto' src='" . $image . "'>
    <p class='nameStaff colorBlue'>" . $firstname . " </p>
    </div>";
}

function ImageProducts (?string $image, string $name) {
    if ($image === "" || $image === null) {
        $image = "https://tse4.mm.bing.net/th?id=OIP.-MZ8_5qRcbVJLZmiROsf-AHaFj&pid=Api&P=0&w=217&h=164";
    }
    echo "<img alt='" . $name . "' class='imgTable' src='" . $image . "'>";
}

function checkPass($pass)
{
    $maj = preg_match('@[A-Z]@', $pass);
    $min = preg_match('@[a-z]@', $pass);
    $number = preg_match('@[0-9]@', $pass);
    $char = preg_match('@[^a-zA-Z\d]@', $pass);

    if(!$maj|| !$min || !$number || !$char ||strlen($pass) < 10)    {
        return false;
    }
    else{
        return true;
    }
}

