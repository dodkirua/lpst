<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Reservation.php";


class ReservationManager{
    private ?PDO $db;

    /**
     * ReservationManager constructor.
     */
    public function __construct()    {
        $this->db = DB::getInstance();
    }

    private function maxId() : int{
        $stmt = $this->db->prepare("SELECT MAX(id) from reservation");
        $stmt->execute();
        $id = $stmt->fetch();
        if ($id["MAX(id)"] !== null) {
            return  $id["MAX(id)"];
        }
        else {
            return 0;
        }
    }

    public function addReservation(int $delivery, int $user) : bool{
        $id = $this->maxId() + 1 ;
        $date = new DateTime();
        $reservation = "R" . $date->format("Y") . $user . $id;
        $dat = $date->getTimestamp();
        $stmt = $this->db->prepare("
                INSERT INTO  reservation (date, delivery, reservation_num, user_id) 
                VALUES (:date, :delivery, :reservation_num, :user_id)                
            ");

        $stmt->bindValue(':date',$dat);
        $stmt->bindValue(':delivery',$delivery);
        $stmt->bindValue(':reservation_num',$reservation);
        $stmt->bindValue(':user_id',$user);


        return $stmt->execute();
    }

    /**
     * return reservation by id
     * @param $id
     * @return Reservation|null
     */
    public function getReservationByid($id) : ?Reservation{
        $stmt = $this->db->prepare("SELECT * FROM reservation WHERE id='".$id."'");
        $reservation = null;
        if ($state = $stmt->execute())  {
            $item = $stmt->fetch();
            $reservation = new Reservation($id);
            $reservation = $reservation
                ->setDate($item['date'])
                ->setDelivery($item['delivery'])
                ->setReservationNum($item['reservation_num'])
                ->setValidated($item['validated'])
                ->setUserId($item['user_id']);

            return $reservation;
        }
        else {
            return null;
        }
    }

    /**
     * @param $user
     * @return array
     */
    public function getReservationByUser($user) : array {
        $stmt = $this->db->prepare("SELECT * FROM reservation WHERE user_id='".$user."'");
        $array = [];
        if ($state = $stmt->execute()) {
            foreach ($stmt->fetchAll() as $item){
                $reservation = new Reservation($item['id']);
                $reservation = $reservation
                    ->setDate($item['date'])
                    ->setDelivery($item['delivery'])
                    ->setReservationNum($item['reservation_num'])
                    ->setValidated($item['validated'])
                    ->setUserId($item['user_id'])
                ;
                $array[]=$reservation;
            }


            return $array;
        }

    }
}