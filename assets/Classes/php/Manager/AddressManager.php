<?php
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/BD.php";
include $_SERVER['DOCUMENT_ROOT'] . "/assets/Classes/php/User.php";

class AddressManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    /**
     * search a address in DB
     * @param string $street
     * @param int $number
     * @param string $zipCode
     * @param string $city
     * @param string $country
     * @param string|null $compl
     * @return int|null
     */
    private function searchAddress(string $street, int $number, string $zipCode, string $city, string $country, ?string $compl) : ?int{
        $street = strtolower($street);
        $zipCode = strtolower($zipCode);
        $city = strtolower($city);
        $country = strtolower($country);
        if (!is_null($compl)) {
            $compl = strtolower($compl);
            $stmt = $this->db->prepare("SELECT * FROM address
                WHERE street='" . $street . "' 
                AND number=" . $number . " 
                AND zip_code='" . $zipCode . "' 
                AND city='" . $city . "'
                AND country='" . $country . "'  
                AND complement='" . $compl . "' 
                ");
        }
        else {
            $stmt = $this->db->prepare("SELECT * FROM address
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
           return intval($user['id']);
        }
        else{
            return null;
        }
    }

    /**
     * search id of address or add in DB
     * @param string $street
     * @param int $number
     * @param string $zipCode
     * @param string $city
     * @param string $country
     * @param string|null $compl
     * @return int
     */
    public function addAddress(string $street, int $number, string $zipCode, string $city, string $country, ?string $compl) : int{
        $id = $this->searchAddress( $street, $number, $zipCode, $city, $country, $compl);
        if (is_null($id)){
            return $this->add($street, $number, $zipCode, $city, $country, $compl);
        }
        else {
            return $id;
        }
    }

    /**
     * insert in database
     * @param string $street
     * @param int $number
     * @param string $zipCode
     * @param string $city
     * @param string $country
     * @param string|null $compl
     * @return int
     */
    private function add(string $street, int $number, string $zipCode, string $city, string $country, ?string $compl): int{
        $street = strtolower($street);
        $zipCode = strtolower($zipCode);
        $city = strtolower($city);
        $country = strtolower($country);
        if (!is_null($compl)) {
            $compl = strtolower($compl);
            $stmt = $this->db->prepare("INSERT INTO address (street, number, complement, zip_code, city, country) 
                VALUES ('".$street."','".$number."','".$compl."','".$zipCode."','".$city."','".$country."');
                ");
        }
        else {
            $stmt = $this->db->prepare("INSERT INTO address (street, number, complement, zip_code, city, country) 
                VALUES ('".$street."','".$number."',NULL,'".$zipCode."','".$city."','".$country."');
                ");
        }

        if ($stmt->execute()){
            $stmt2 = $this->db->prepare("SELECT max(id) FROM address");
            if ($stmt2->execute()){
             $id = $stmt2->fetch();
             return intval($id["max(id)"]);
            }
        }
        else {
            return -1;
        }
    }

}