<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/User.php";

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
        $name = mb_strtolower($name);
        $surname = mb_strtolower($surname);
        $mail = mb_strtolower($mail);
        $stmt = $this->db->prepare("
                INSERT INTO  user (lastname, firstname, mail, pass, role_id) VALUES (:lastname, :firstname, :mail, :pass, :role)                
            ");

        $stmt->bindValue(':lastname',$name, PDO::PARAM_STR);
        $stmt->bindValue(':firstname',$surname, PDO::PARAM_STR);
        $stmt->bindValue(':mail',$mail);
        $stmt->bindValue(':pass',$pass);
        $stmt->bindValue(":role",2);

        return $stmt->execute();
    }

    /**
     * search a mail in DB
     * @param $mail
     * @return int|null
     */
   public function searchMail($mail) : ?int{
        $stmt = $this->db->prepare("SELECT id FROM user WHERE mail = '$mail'");
        if($stmt->execute()) {
            return intval($stmt->fetch()['id']);
        }
        else {
            return null;
        }
    }

    /**
     * test connection if the mail and pass is appearing in the DB
     * @param string $mail
     * @param string $pass
     * @return User|null
     */
    public function testConnection(string $mail, string $pass) :?User {
        $mail = strtolower($mail);
        $stmt = $this->db->prepare("SELECT * FROM user WHERE mail='".$mail."'");
        $user = null;
        if ($state = $stmt->execute()){

            foreach ($stmt->fetchAll() as $item) {

                $user =  new User($item['id']);
                $user = $user
                    ->setLastname($item['lastname'])
                    ->setFirstname($item['firstname'])
                    ->setMail($item['mail'])
                    ->setPass($item['pass'])
                    ->setRole($item['role_id'])
                    ;
            }
        }
       if (password_verify($pass,$user->getPass())){
            return $user;
        }
        else {
            return null;
        }
    }

    public function getStaff() : array{
        $stmt = $this->db->prepare("SELECT * FROM user WHERE role_id != 2");
        $staff =[];
        if ($state = $stmt->execute()) {
            foreach ($stmt->fetchAll() as $item){
                $user = new User($item['id']);
                $user = $user
                    ->setLastname($item['lastname'])
                    ->setFirstname($item['firstname'])
                    ->setImage($item['image'])
                    ->setMail($item['mail'])
                    ->setPass($item['pass'])
                    ->setPhone($item['phone'])
                    ->setChecked($item['checked'])
                    ->setRole($item['role_id'])
                ;
                $staff[]=$user;
            }
        }
        return $staff;
    }

}