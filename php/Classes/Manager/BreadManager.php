<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Bread.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/BreadReservationManager.php";


class BreadManager{
    private ?PDO $db;

    /**
     * BreadManager constructor.
     */
    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * add Bread in DB
     * @param string $name
     * @param float $price
     * @param float $weight
     * @param string $description
     * @param int $baker
     * @return bool
     */
    public function addBread(string $name, float $price, float $weight, string $description, int $baker) : bool {
        $name = mb_strtolower($name);
        $description = mb_strtolower($description);
        $stmt = $this->db->prepare(" 
                INSERT INTO bread (name, price, weight, description, baker_id) 
                VALUES (:name, :price, :weight, :des, :baker) 
        ");
        $stmt->bindValue(':name',$name);
        $stmt->bindValue(':price',$price);
        $stmt->bindValue(':weight',$weight);
        $stmt->bindValue(':des',$description);
        $stmt->bindValue(':baker',$baker);
        return $stmt->execute();
    }

    /**
     * get bread by id
     * @param $id
     * @return Bread|null*
     */
    public function getBreadById($id) : ?Bread{
        $stmt = $this->db->prepare("SELECT * FROM bread WHERE id = :id");
        $stmt->bindValue(":id",$id);
        if ($state = $stmt->execute()) {
            $item = $stmt->fetch();
            $bread = new Bread($id);
            $bread = $bread
                ->setName($item['name'])
                ->setPrice($item['price'])
                ->setWeight($item['weight'])
                ->setDescription($item['description'])
                ->setBakerId($item['baker_id'])
            ;
            return $bread;
        }
        else {
            return null;
        }
    }

    /**
     * get bread by baker
     * @param int $baker
     * @return array
     */
    public function getBreadByBaker(int $baker):array {
        $stmt = $this->db->prepare("SELECT * FROM bread WHERE baker_id = :id");
        $stmt->bindValue(":id",$baker);
        $breads = [];
        if ($state = $stmt->execute()) {
           foreach ($stmt->fetch() as $item){
               $bread = new Bread($item['id']);
               $bread = $bread
                   ->setName($item['name'])
                   ->setPrice($item['price'])
                   ->setWeight($item['weight'])
                   ->setDescription($item['description'])
                   ->setBakerId($item['baker_id']);
               $breads[] = $bread;
           }
        }
        return $breads;
    }

    /**
     * get all bread by baker
     * @param $baker
     * @return array
     */
    public function getByBaker($baker) : array {
        $stmt = $this->db->prepare("SELECT * FROM bread WHERE baker_id = :baker");
        $stmt->bindValue(":baker",$baker);
        $breads =  [];
        if ($state = $stmt->execute()) {
            foreach ($stmt->fetchAll() as $item){
                $bread = new Bread($item['id']);
                $bread = $bread
                    ->setName($item['name'])
                    ->setPrice($item['price'])
                    ->setWeight($item['weight'])
                    ->setDescription($item['description'])
                    ->setImage($item['image'])
                    ->setBakerId($item['baker_id'])
                ;
                $breads[] = $bread;
            }
        }
        return $breads;
    }

    /**
     * del inn DB
     * @param $id
     * @var BreadReservation$item
     */
    public function delById($id){
        $breadReservation= new BreadReservationManager();
        $array = $breadReservation->getByBreadId($id);
        foreach ($array as $item){
            $breadReservation->delById($item->getId());
        }
        $stmt = $this->db->prepare("DELETE FROM bread_reservation WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
    }


}