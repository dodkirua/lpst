<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/BreadReservation.php";



class BreadReservationManager{
    private ?PDO $db;

    /**
     * BreadReservationManager constructor.
     */
    public  function __construct(){
        $this->db = DB::getInstance();
    }
    
    public function addBreadReservation(float $amount, int $bread, int $reservation){
        $stmt = $this->db->prepare("
                INSERT INTO  bread_reservation (amount, bread_id, reservation_id) 
                VALUES (:amount, :bread_id, :reservation_id)                
            ");

        $stmt->bindValue(':amount',$amount);
        $stmt->bindValue(':bread',$bread);
        $stmt->bindValue(':reservation',$reservation);
        
        return $stmt->execute();
    }
    
    public function getBreadReservationById(int $id) : ?BreadReservation {
        $stmt = $this->db->prepare("SELECT * FROM bread_reservation WHERE id = :id");

        $stmt->bindValue(':id',$id);
        $breadReservation = null;
        if ($state = $stmt->execute()) {
            $item = $stmt->fetch();
            $breadReservation = new BreadReservation($id);
            $breadReservation = $breadReservation
                ->setAmount($item['amount'])
                ->setBreadId($item['bread'])
                ->setReservationId($item['reservation'])
            ;
            return $breadReservation;
        }
        else {
            return null;
        }
    }
    
}