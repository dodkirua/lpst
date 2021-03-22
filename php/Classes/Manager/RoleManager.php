<?php
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/BD.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/User.php";

class RoleManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }
}