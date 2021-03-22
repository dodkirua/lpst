<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/User.php";

class InformationManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }


}