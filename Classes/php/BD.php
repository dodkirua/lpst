<?php

class DB{
    private string $host = 'localhost';
    private string $db = "lspt";
    private string $user = 'dev';
    private string $pass = 'dev';

    private static  ?PDO $dbInstance = null;

    /**
     * DbStatic constructor.
     */
    public function __construct()
    {
        try {
            self::$dbInstance = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->pass);
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