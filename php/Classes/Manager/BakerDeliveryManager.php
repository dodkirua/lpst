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
        return $this->get($stmt);
    }

    public function getByDeliveryDate(int $delivery) : array{
        $stmt = $this->db->prepare("SELECT * FROM baker_delivery WHERE delivery_date_id = :delivery");
        $stmt->bindValue(":delivery",$delivery);
        return $this->get($stmt);
    }

    /**
     * del in DB
     * @param $id
     */
    public function delById($id){
        $stmt = $this->db->prepare("DELETE FROM baker_delivery WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
    }

    private function get($stmt): array    {
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