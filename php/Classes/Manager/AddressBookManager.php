<?php
require $_SERVER['DOCUMENT_ROOT'] . "/php/import/importManager.php";


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
     * @return int
     */
    public function add(string $name, int $idUser, int $idAddress, ?string $firstname, ?string $lastname, ?string $phone) : int {
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

        if ($stmt->execute()){
            $stmt2 = $this->db->prepare("SELECT max(id) FROM address_book");
            if ($stmt2->execute()){
                $id = $stmt2->fetch();
                return intval($id["max(id)"]);
            }
        }
        else {
            return -1;
        }
    }

    /**
     * return a AddressBook object
     * @param int $id
     * @return AddressBook|null
     */
    public function getAddress(int $id) : ?AddressBook{
        $stmt = $this->db->prepare("SELECT * FROM address_book WHERE id='".$id."'");
        if ($state = $stmt->execute()){
            $item = $stmt->fetch();
            $address = new AddressBook($id);
            $address = $address
                ->setName($item['name'])
                ->setFirstname($item['firstname'])
                ->setLastname($item["lastname"])
                ->setPhone($item["phone"])
                ->setUserId($item['user_id'])
                ->setAddressId($item["address_id"])
            ;
            return $address;
        }
        return null;

    }
}