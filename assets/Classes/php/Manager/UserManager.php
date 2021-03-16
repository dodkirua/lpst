<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/User.php";

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
    public function addUser($name, $surname, $mail, $pass) : bool{
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

    /**
     * test connection if the mail and pass is appearing in the DB
     * @param string $mail
     * @param string $pass
     * @return array|null
     */
    public function testConnection(string $mail, string $pass) {
        $stmt = $this->db->prepare("SELECT '".$mail."' FROM user");
        $user = null;
        if ($state = $stmt->execute()){

            foreach ($stmt->fetchAll() as $item) {
                return $item;
                /*$user =  new User($item['id']);
                $user = $user
                    ->setName($item['name'])
                    ->setSurname($item['surname'])
                    ->setMail($item['mail'])
                    ->setPass($item['pass'])
                    ->setRole($item['role_id'])
                    ;*/
            }
        }
      /*  if (password_verify($pass,$user->getPass())){
            return $user;
        }
        else {
            return null;
        }*/
    }

}