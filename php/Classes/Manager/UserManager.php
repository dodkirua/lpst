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

        $stmt->bindValue(':lastname',$name);
        $stmt->bindValue(':firstname',$surname);
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
        $id = $this->searchMail($mail);
        if (!is_null($id)){
            $user = $this->getUserById($id);
            if (!is_null($user)) {
                if (password_verify($pass, $user->getPass())) {
                    return $user;
                } else {
                    return null;
                }
            }
            else {
                return null;
            }
        }
        else {
            return null;
        }
    }

    /**
     * get the Staff
     * @return array
     */
    public function getStaff() : array{
        $stmt = $this->db->prepare("SELECT * FROM user WHERE role_id != 2");
        return $this->getUser($stmt);
    }

    /**
     * get the Staff
     * @return array
     */
    public function getAllUser() : array{
        $stmt = $this->db->prepare("SELECT * FROM user");
        return $this->getUser($stmt);
    }

    public function validateMail($mail,$id): bool
    {
        //generate token
        $key = md5(time() . uniqid());
        $date = new DateTime();
        $date = $date->modify('+1 day');
        $date =  $date->getTimestamp();

        // modify DB
        $stmt = $this->db->prepare("UPDATE user SET 
                key_verification = :key ,
                date_token = :date
                WHERE id = :id");
        $stmt->bindValue(':key',$key);
        $stmt->bindValue(':date',$date);
        $stmt->bindValue(':id',$id);

        $stmt->execute();

        // Preparation of the email containing the activation link
        $recipient = $mail;
        $subject = "Activer votre compte" ;
        $from = "contact@lspt.fr" ;
        $header = array(
            "from" => $from,
            "X-Mailer" => 'PHP/' . phpversion(),
            'Content-type' => 'text/html; charset=iso-8859-1',
            'MIME-Version' => '1.0'
        );
        // The activation link is composed of the id and the key
                $message = 'Bienvenue sur VotreSite,
         
        Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
        ou copier/coller dans votre navigateur Internet.
         
        http://localhost:8000/activation.php?log='.urlencode($id).'&key='.urlencode($key).'
         
         
        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre.';


        return mail($recipient, $subject, $message, $header) ;
    }

    /**
     * return User by a id search
     * @param int $id
     * @return User|null
     */
    public function getUserById(int $id) : ?User{
        $stmt = $this->db->prepare("SELECT * FROM user WHERE id='".$id."'");
        $user = null;
        if ($state = $stmt->execute()) {
            $item = $stmt->fetch();
            $user = new User($id);
            $user = $user
                ->setLastname($item['lastname'])
                ->setFirstname($item['firstname'])
                ->setMail($item['mail'])
                ->setPass($item['pass'])
                ->setRole($item['role_id'])
                ->setChecked(boolval($item["checked"]))
                ->setPhone($item["phone"])
                ->setImage($item["image"]);
            return $user;
        }
        else {
            return null;
        }
    }

    /**
     * modify the values in DB by a User
     * @param User $user
     * @return bool
     */
    public function modifyUser(User $user): bool    {
        $stmt = $this->db->prepare("UPDATE user SET 
                lastname = :last,
                firstname = :first,
                mail = :mail,
                pass = :pass,
                phone = :phone,
                image = :img,
                checked = :check,
                key_verification = :key,
                date_token = :date
                WHERE id= :id");
        $stmt->bindValue(':id',$user->getId());
        $stmt->bindValue(':last',$user->getLastname());
        $stmt->bindValue(':first',$user->getFirstname());
        $stmt->bindValue(':mail',$user->getMail());
        $stmt->bindValue(':pass',$user->getPass());
        $stmt->bindValue(':phone',$user->getPhone());
        $stmt->bindValue(':img',$user->getImage());
        $stmt->bindValue(':check',$user->getChecked());
        $stmt->bindValue(':key',$user->getKey());
        $stmt->bindValue(':date',$user->getDate());

        return $stmt->execute();
    }

    /**
     *  search User with a prepared request
     * @param $stmt //prepared request
     * @return array
     */
    private function getUser($stmt): array
    {
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

   /**
     * del a user
     * @param $id
     */
    /*    public function delUser($id){
           $user = $this->getUserById($id);
          // if ($user->)
           $stmt = $this->db->prepare("DELETE FROM user WHERE id = :id");
           $stmt->bindValue(':id',$id);
           $stmt->execute();
       }*/

    public function delInfoUser($id){
        $stmt = $this->db->prepare("UPDATE user SET
                                mail = null,
                                pass = null,
                                phone = null,
                                image = null,
                                checked = 0,               
                                key_verification = null,
                                date_token = null
                                WHERE id = :id
                                ");
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }
}