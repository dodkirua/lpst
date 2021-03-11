<?php


class UserManager{
    private ?PDO $db;

    public  function __construct(){
        $this->db = DB::getInstance();
    }

    public function addUser($name, $surname, $mail, $pass){

    }


}