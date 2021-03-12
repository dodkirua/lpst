<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";

class UserManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    public function addUser($name, $surname, $mail, $pass){
        $stmt = $this->db->prepare("
                INSERT INTO  user (name, surname, mail, pass, role_id) VALUES (:name, :surname, :mail, :pass, :role)                
            ");

        $stmt->bindValue(':name',$name);
        $stmt->bindValue(':surname',$surname);
        $stmt->bindValue(':mail',$mail);
        $stmt->bindValue(':pass',$pass);
        $stmt->bindValue(":role","2");

        return $stmt->execute();
    }


}