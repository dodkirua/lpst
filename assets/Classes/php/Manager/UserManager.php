<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";

class UserManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * add user in DB
     * @param $name
     * @param $surname
     * @param $mail
     * @param $pass
     * @return bool
     */
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

   /**
     * search a mail in DB
     * @param $mail
     * @return array
     */
   /* public function searchMail($mail){
        $stmt = $this->db->prepare("SELECT $mail FROM user");
        $state = $stmt->execute();
        if($stmt->execute()) {
            foreach ($stmt->fetch) {
                //on crée nos objets de type article
                //$articles[] = new Article($item['id'],$item['title'],$item['content'], $item['date_add']);
                $article = new Article($item['id']);
                $articles[] = $article
                    ->setTitle($item['title'])
                    ->setContent($item['content'])
                    ->setDateAdd($item['date_add'])
                ;
            }
        }
        return $articles;$
    }*/


}