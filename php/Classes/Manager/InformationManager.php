<?php
require $_SERVER['DOCUMENT_ROOT'] . "/php/import/importManager.php";

class InformationManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    public function addInformation(?string $title,string $desc, ?string $img, string $location, int $user){

    }
}