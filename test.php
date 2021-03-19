<?php
require "./assets/Classes/php/Manager/addressManager.php";

$adress = new addressManager();

$test = $adress->searchAddress("rue de paris",13,"59186","anor","france",null);

echo "<pre>";
var_dump($test);
echo "</pre>";

$test = $adress->searchAddress("venise beach",45,"59782","miami","france","ter");

echo "<pre>";
var_dump($test);
echo "</pre>";