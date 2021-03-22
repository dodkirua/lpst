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
     * @param string|null $firstname
     * @param string|null $lastname
     * @param string|null $phone
     */
    public function add(string $name, int $idUser, int $idAddress, ?string $firstname, ?string $lastname, ?string $phone) {
        $stmt = $this->db->prepare("INSERT INTO address_book (name, user_id, address_id, firstname, lastname, phone) 
                VALUES (:name,:user,:address,:firstname, :lastname, :phone)
                ");

        $stmt->bindValue(':name',$name);
        $stmt->bindValue(':user',$idUser);
        $stmt->bindValue(':address',$idAddress);
        if (is_null($firstname)){
            $stmt->bindValue(':firstname',null);
        }
        else {
            $stmt->bindValue(':firstname',$firstname);
        }
        if (is_null($lastname)){
            $stmt->bindValue(':lastname',null);
        }
        else {
            $stmt->bindValue(':lastname',$lastname);
        }
        if (is_null($phone)){
            $stmt->bindValue(':phone',null);
        }
        else {
            $stmt->bindValue(':phone',$phone);
        }

        $stmt->execute();
    }
}