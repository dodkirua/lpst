<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/AddressBookManager.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/AddressManager.php";

if (isset($_POST["delivery"]) && isset($_POST["addressName"]) && isset($_POST["firstname"]) && isset($_POST["lastname"])
    && isset($_POST["num_street"]) && isset($_POST["floor"]) && isset($_POST["num_door"]) && isset($_POST["complements"]) 
    && isset($_POST["country"]) && isset($_POST["postalCode"]) && isset($_POST["city"]) && isset($_POST["phone"]))
{
    $delivery = intval(sanitize($_POST["delivery"]));
    $addressName = sanitize($_POST["addressName"]);
    $firstname = sanitize($_POST["firstname"]);
    $lastname = sanitize($_POST["lastname"]);
    $numStreet = intval(sanitize($_POST["num_street"]));
    $floor = sanitize($_POST["floor"]);
    $numDoor = sanitize($_POST["num_door"]);
    $complements = sanitize($_POST["complements"]);
    $country = sanitize($_POST["country"]);
    $postalCode = sanitize($_POST["postalCode"]);
    $city = sanitize($_POST["city"]);
    $phone = sanitize($_POST["phone"]);

    $managerAddress = new AddressManager();
    $managerBook = new AddressBookManager();

    $addressId = $managerAddress->searchAddress();
}
else {
    header("../pages/account.php?e=0");
}