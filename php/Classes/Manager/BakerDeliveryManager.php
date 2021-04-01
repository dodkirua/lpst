<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/BakerDelivery.php";

class BakerDeliveryManager{
    private ?PDO $db;

    /**
     * UserManager constructor.
     */
    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * add Baker delivery in DB
     * @param int $baker
     * @param int $deliveryDate
     * @return bool
     */
    public function addBakerDelivery(int $baker,int $deliveryDate) : bool{
        $stmt = $this->db->prepare("
        INSERT INTO baker_delivery (baker_id, delivery_date_id) VALUES (:baker_id, :delivery_date_id)");

        $stmt->bindValue(":baker_id",$baker);
        $stmt->bindValue(":delivery_date_id",$deliveryDate);

        return $stmt->execute();
    }

    /**
     * get by id
     * @param $id
     * @return BakerDelivery|null
     */
    public function getById($id) : ?BakerDelivery{
        $stmt = $this->db->prepare("SELECT * FROM baker_delivery WHERE id=:id");
        $stmt->bindValue(":id",$id);
        $baker = null;
        if ($state = $stmt->execute()) {
            $item = $stmt->fetch();
            $baker = new BakerDelivery($id);
            $baker = $baker
                ->setBakerId($item['baker_id'])
                ->setDeliveryDateId($item['delivery_date_id'])
            ;            
        }
        return $baker;
        
    }

    /**
     * get by baker
     * @param int $baker
     * @return array
     */
    public function getByBaker(int $baker) : array{
        $stmt = $this->db->prepare("SELECT * FROM baker_delivery WHERE baker_id = :baker");
        $stmt->bindValue(":baker",$baker);
        $bakers = [];
        if ($state = $stmt->execute()) {
            foreach ($stmt->fetchAll() as $item){
                $baker = new BakerDelivery($item['id']);
                $baker = $baker
                    ->setBakerId($item['baker_id'])
                    ->setDeliveryDateId($item['delivery_date_id'])
                ;
                $bakers[] = $baker;
            }
        }
        return $bakers;
    }
}