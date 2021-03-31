<?php


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


}