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