<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/User.php";

class addressManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    private function searchAddress(string $street, int $number, string $zipCode, string $city, string $country, ?string $compl){
        $street = strtolower($street);
        $zipCode = strtolower($zipCode);
        $city = strtolower($city);
        $country = strtolower($country);
        if (!is_null($compl)) {
            $compl = strtolower($compl);
            $stmt = $this->db->prepare("SELECT * FROM adress
                WHERE street='" . $street . "' 
                AND number=" . $number . " 
                AND zip_code='" . $zipCode . "' 
                AND city='" . $city . "'
                AND country='" . $country . "'  
                AND complement='" . $compl . "' 
                ");
        }
        else {
            $stmt = $this->db->prepare("SELECT * FROM adress
                WHERE street='" . $street . "' 
                AND number=" . $number . " 
                AND zip_code='" . $zipCode . "' 
                AND city='" . $city . "'
                AND country='" . $country . "'
                AND complement IS NULL 
                ");
        }
        if ($state = $stmt->execute()){
            $user = $stmt->fetch();
           return $user['id'];
        }
        else{
            return -1;
        }
    }

    public function addAddress(string $street, int $number, string $zipCode, string $city, string $country, ?string $compl){
        $id = $this->searchAddress( $street,  $number, $zipCode, $city, country,$compl);
    }

}