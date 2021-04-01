<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DeliveryDate.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Manager/BakerDeliveryManager.php";

class DeliveryDateManager{
    private ?PDO $db;

    /**
     * UserManager constructor.
     */
    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * add Delivery date in DB
     * @param string $day
     * @param string|null $time
     * @return bool
     */
    public function addDeliveryDate(string $day,?string $time) : bool{
        $day = mb_strtolower($day);
        $time = mb_strtolower($time);

        $stmt = $this->db->prepare("
                INSERT INTO delivery_date (day, time) VALUES    (:day, :time)
        ");
        $stmt->bindValue(":day",$day);
        $stmt->bindValue(":time",$time);

        return $stmt->execute();
    }

    public function getDeliveryDateById(int $id) : ?DeliveryDate {
        $stmt = $this->db->prepare("SELECT * FROM delivery_date WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $delivery = null;
        if ($state = $stmt->execute()){
            $item = $stmt->fetch();
            $delivery = new DeliveryDate($id);
            $delivery = $delivery
                ->setDay($item['day'])
                ->setTime($item["time"])
            ;
        }
        return $delivery;
    }

    /**
     * @param $id
     * @var BakerDelivery $item
     */
    public function delById($id){
        $bakerdelivery = new BakerDeliveryManager();
        $array = $bakerdelivery->getByDeliveryDate($id);
        foreach ($array as $item){
            $bakerdelivery->delById($);
        }
        $stmt = $this->db->prepare("DELETE FROM delivery_date WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
    }
}