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
        INSERT INTO baker (name, address_id) VALUES (:name, :address_id)");

        $stmt->bindValue(":name",$name);
        $stmt->bindValue(":address_id",$address);

        return $stmt->execute();
    }

    /**
     * get baker by id
     * @param int $id
     * @return Baker|null
     */
    public function getBakerById(int $id) : ?Baker {
        $stmt = $this->db->prepare("SELECT * FROM baker WHERE id=:id");
        $stmt->bindValue(":id",$id);
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

    /**
     * get all baker
     * @return array
     */
    public function getAll() : array {
        $stmt = $this->db->prepare("SELECT * FROM baker");
        $bakers =  [];
        if ($state = $stmt->execute()) {
            foreach ($stmt->fetchAll() as $item){
                $baker = new Baker($item['id']);
                $baker = $baker
                    ->setName($item['name'])
                    ->setAddressId($item['address_id'])
                ;
                $bakers[] = $baker;
            }
        }
        return $bakers;
    }
}