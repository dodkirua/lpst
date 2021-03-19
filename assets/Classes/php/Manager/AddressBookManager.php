<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/User.php";


class AddressBookManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * add address book to DB
     * @param string $name
     * @param int $idUser
     * @param int $idAddress
     */
    public function add(string $name, int $idUser, int $idAddress) {
        $stmt = $this->db->prepare("INSERT INTO address_book (name, user_id, address_id) 
                VALUES ('".$name."','".$idUser."','".$idAddress."')
                ");
        $stmt->execute();
    }
}