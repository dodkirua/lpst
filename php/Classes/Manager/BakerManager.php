<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Baker.php";

class BakerManager{
    private ?PDO $db;

    /**
     * BakerManager constructor.
     */
    public function __construct()    {
        $this->db = DB::getInstance();
    }

    /**
     * add Baker in DB
     * @param string $name
     * @param int $address
     * @return bool
     */
    public function addBaker(string $name, int $address) : bool{
        $name = mb_strtolower($name);
        $stmt = $this->db->prepare("
        INSERT INTO baker (name, address_id) VALUE (:name, :address_id)");

        $stmt->bindValue(":name",$name);
        $stmt->bindValue(":address_id",$address);

        return $stmt->execute();
    }

    public function getBakerById(int $id) : ?Baker {
        $stmt = $this->db->prepare("SELECT * FROM baker WHERE id='".$id."'");
        $baker = null;
        if ($state = $stmt->execute()) {
            $item = $stmt->fetch();
            $baker = new Baker($id);
            $baker = $baker
                ->setName($item['name'])
                ->setAddressId($item['address_id'])
            ;
            return $baker;
        }
        else {
            return null;
        }
    }
}