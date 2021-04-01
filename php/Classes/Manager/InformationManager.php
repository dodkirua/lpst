<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/DB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/php/Classes/Information.php";
require $_SERVER['DOCUMENT_ROOT'] . "/php/function.php";

class InformationManager{
    private ?PDO $db;

    /**
     * InformationManager constructor.
     */
    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * add a information in DB
     * @param string|null $title
     * @param string $desc
     * @param string|null $img
     * @param string $location
     * @param int $user
     * @return int
     */
    public function addInformation(?string $title,string $desc, ?string $img, string $location, int $user): int{
        $title = mb_strtolower($title);
        $desc = mb_strtolower($desc);
        $img = mb_strtolower($img);
        $location = mb_strtolower($location);

        $stmt = $this->db->prepare("INSERT INTO information (title, description, image, location, user_id) 
                VALUES (:title, :description, :image, :location, :user_id)
                ");

        $stmt->bindValue(':location',$location);
        $stmt->bindValue(':description',$desc);
        $stmt->bindValue(':user_id',$user);
        if (is_null($title)){
            $stmt->bindValue(':title',null);
        }
        else {
            $stmt->bindValue(':title',$title);
        }
        if (is_null($img)){
            $stmt->bindValue(':image',null);
        }
        else {
            $stmt->bindValue(':image',$img);
        }



        if ($stmt->execute()){
            $stmt2 = $this->db->prepare("SELECT max(id) FROM information");
            if ($stmt2->execute()){
                $id = $stmt2->fetch();
                return intval($id["max(id)"]);
            }
        }
        return -1;

    }

    /**
     * get information in objet Information
     * @param int $id
     * @return Information|null
     */
    public function getInformation(int $id) : ?Information{
        $stmt = $this->db->prepare("SELECT * FROM information WHERE id='".$id."'");
        if ($state = $stmt->execute()) {
            $item = $stmt->fetch();
            $information = new Information($id);
            $information = $information
                ->setTitle($item['title'])
                ->setDescription($item['description'])
                ->setImage($item['image'])
                ->setLocation($item['location'])
                ->setUser($item['user_id'])
            ;
            return $information;
        }
        return null;
    }

    /**
     * returns a list of Information objects following the information in the location column
     * @param string $location
     * @return array
     */
    public function getInformationByLocation (string $location) : array{
        $stmt = $this->db->prepare("SELECT * FROM information WHERE location='".$location."'");
        $informations =[];
        if ($state = $stmt->execute()) {
            foreach ($stmt->fetchAll() as $item){
                $information = new Information($item['id']);
                $information = $information
                    ->setTitle($item['title'])
                    ->setDescription($item['description'])
                    ->setImage($item['image'])
                    ->setLocation($item['location'])
                    ->setUser($item['user_id'])
                ;
                $informations[]=$information;
            }
        }
        return $informations;
    }

    /**
     * modify  title description image et location
     * @param int $id
     * @param string $title
     * @param string $description
     * @param string $image
     * @param string $location
     * @return bool
     */
    public function modify(int $id, string $title, string $description, string $image, string $location): bool    {
        $stmt = $this->db->prepare("UPDATE information 
                SET title = :title, description = :description, image = :image, location = :location
                WHERE id = :id        
        ");
        $stmt->bindValue(":id",$id);
        $stmt->bindValue(":title",$title);
        $stmt->bindValue(":description",$description);
        $stmt->bindValue(":image",$image);
        $stmt->bindValue(":location",$location);

        return $stmt->execute();
    }
}