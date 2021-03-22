<?php
require $_SERVER['DOCUMENT_ROOT'] . "/php/import/importManager.php";

class RoleManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }
}