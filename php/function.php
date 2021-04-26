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
    return addslashes($data);
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

function containerShop1 (?string $image, ?string $title, string $text) {
    if ($image === "" || $image === null) {
        echo "<div class='flexCenter width_100'  id='containerShop1'>
            <div class='description colorBlue'>
            <h2 class='colorGreen'>$title</h2>
            <p>$text</p>
            </div>
        </div>";
    }
    else if ($title === "" || $title === null) {
        echo "<div class='flexCenter'  id='containerShop1'>
        <img class='shop' alt='" . $title . "' src='" . $image . "'>
        <p class='description colorBlue'>$text</p>
        </div>";
    }
    else {
        echo "<div class='flexCenter'  id='containerShop1'>
        <img class='shop' alt='" . $title . "' src='" . $image . "'>
        <div class='description colorBlue'>
        <h2 class='colorGreen'>$title</h2>
        <p>$text</p>
        </div>
        </div>";
    }
}

function containerShop2 (?string $image, ?string $title, string $text) {
    if ($image === "" || $image === null) {
        echo "<div class='flexCenter width_100'  id='containerShop2'>
            <div class='description colorBlue'>
            <h2 class='colorGreen'>$title</h2>
            <p>$text</p>
            </div>
        </div>";
    }
    else if ($title === "" || $title === null) {
        echo "<div class='flexCenter'  id='containerShop2'>
        <p class='description colorBlue'>$text</p>
        <img class='shop' alt='" . $title . "' src='" . $image . "'>
        </div>";
    }
    else {
        echo "<div class='flexCenter'  id='containerShop2'>
        <div class='description colorBlue'>
        <h2 class='colorGreen'>$title</h2>
        <p>$text</p>
        </div>
        <img class='shop' alt='" . $title . "' src='" . $image . "'>
        </div>";
    }
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
        $image = "../assets/img/bread/bread.jpg";
    }
    echo "<img alt='" . $name . "' class='imgTable' src='" . $image . "'>";
}

function checkPass($pass) {
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


function bakerDelivery($baker, $bakerDeliveryManager, $deliveryDate) {
    echo "<p>Livraison : </p>
            <ul>";
    $bakersDelivery = $bakerDeliveryManager->getByBaker($baker);
    foreach ($bakersDelivery as $item) {
        echo "<li>";
        $bakerDelivery = $item->getData();
        $date = $deliveryDate->getDeliveryDateById($bakerDelivery['delivery_date_id'])->getData();
        echo $date['day'];
        if (!is_null($date['time'])) {
            echo " à ". $date['time'];
        }
        echo "</li>";
    }
    echo "</ul>";
}
