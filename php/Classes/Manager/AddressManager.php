<?php
require $_SERVER['DOCUMENT_ROOT'] . "/php/import/importManager.php";

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
        $stmt = $this->db->prepare("INSERT INTO address (street, number, complement, zip_code, city, country) 
                VALUES (:street, :number, :complement, :zip, :city, :country);
                ");
        $stmt->bindValue(':street',$street);
        $stmt->bindValue(':number',$number);
        $stmt->bindValue(':zip',$zipCode);
        $stmt->bindValue(':city',$city);
        $stmt->bindValue(':country',$country);
        if (!is_null($compl)) {
            $compl = strtolower($compl);
            $stmt->bindValue(':complement',$compl);

        }
        else {
            $stmt->bindValue(':complement',null);
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

    /**
     * return a Address object
     * @param int $id
     * @return Address|null
     */
    public function getAddress(int $id) : ?Address{
        $stmt = $this->db->prepare("SELECT * FROM address WHERE id='".$id."'");
        if ($state = $stmt->execute()){
            $item = $stmt->fetch();
            $address = new Address($id);
            $address = $address
                ->setStreet($item['street'])
                ->setComplement($item['complement'])
                ->setNumber($item["number"])
                ->setZip($item["zip_code"])
                ->setCity($item['city'])
                ->setCountry($item["country"])
                ;
            return $address;
        }
        return null;

    }
}