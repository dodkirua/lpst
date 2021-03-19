<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/User.php";


class addressBookManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    public function add($name,$idUser,$idAddress) {
        $stmt = $this->db->prepare("INSERT INTO address_book (name, user_id, address_id) 
                VALUES ('".$name."','".$idUser."','".$idAddress."')
                ");
        if ($stmt->execute()){

        }
    }
}