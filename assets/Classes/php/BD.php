<?php

class DB{

    private static  ?PDO $dbInstance = null;

    /**
     * DbStatic constructor.
     */
    public function __construct(){
        if (file_exists("conf.local.php")){
            require_once "conf.local.php";
        }
        else {
            require_once "conf.local.php";
        }

        /**
         * @var
         */
        try {
            self::$dbInstance = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Return PDO instance.
     */
    public static function getInstance(): ?PDO
    {
        if (is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }

    /**
     * Avoid instance to be cloned.
     */
    public function __clone() { }



}