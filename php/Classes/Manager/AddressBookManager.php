<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/AddressBook.php";


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
     * @param string|null $delivery
     * @return int
     */
    public function add(string $name, int $idUser, int $idAddress, ?string $firstname, ?string $lastname, ?string $phone ,?string $delivery) : int {
        $stmt = $this->db->prepare("INSERT INTO address_book (name, user_id, address_id, firstname, lastname, phone, delivery) 
                VALUES (:name,:user,:address,:firstname, :lastname, :phone, :delivery)
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
        if (is_null($delivery)){
            $stmt->bindValue(':delivery',null);
        }
        else {
            $stmt->bindValue(':delivery',$delivery);
        }
        if ($stmt->execute()){
            $stmt2 = $this->db->prepare("SELECT max(id) FROM address_book");
            if ($stmt2->execute()){
                $id = $stmt2->fetch();
                return intval($id["max(id)"]);
            }
        }
        return -1;

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
                ->setDelivery($item['delivery'])
                ->setUserId($item['user_id'])
                ->setAddressId($item["address_id"])
            ;
            return $address;
        }
        return null;

    }

    /**
     * del in DB
     * @param $id
     */
    public function delById($id){
        $stmt = $this->db->prepare("DELETE FROM address_book WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
    }

    /**
     * modify name firstname lastname delivery and address
     * @param int $id
     * @param string $name
     * @param string $firstname
     * @param string $lastname
     * @param int $delivery
     * @param int $address
     * @return bool
     */
    public function modify(int $id, string $name, string $firstname, string $lastname,int $delivery, int $address): bool    {
        $name = mb_strtolower($name);
        $lastname = mb_strtolower($lastname);
        $firstname = mb_strtolower($firstname);
        $stmt = $this->db->prepare("UPDATE address_book 
                SET name = :name, firstname = :firstname, lastname = :lastname, delivery = :delivery, address_id = :address
                WHERE id = :id        
        ");
        $stmt->bindValue(":id",$id);
        $stmt->bindValue(":name",$name);
        $stmt->bindValue(":address",$address);
        $stmt->bindValue(":firstname",$firstname);
        $stmt->bindValue(":delivery",$delivery);
        $stmt->bindValue(":lastname",$lastname);

        return $stmt->execute();
    }
}