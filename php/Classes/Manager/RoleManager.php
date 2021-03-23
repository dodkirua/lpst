<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";


class RoleManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }
}