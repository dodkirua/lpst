<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/BakerDelivery.php";

class BakerDeliveryManager{
    private ?PDO $db;

    /**
     * UserManager constructor.
     */
    public  function __construct(){
        $this->db = DB::getInstance();
    }
}