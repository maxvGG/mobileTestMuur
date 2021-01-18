<?php

class Db_connection
{
    private $host = '86.89.171.85:3306';
    private $user = 'remoteappium';
    private $pwd = 'Remoteappium';
    private $db = 'appiumwebserver';
    protected $conn;
    protected static $pdo;


    public function connect()
    {
        if (!isset(self::$pdo)) {
            try {
                $dsn = 'mysql:dbname=' . $this->db . ';host=' . $this->host;
                self::$pdo = new PDO($dsn, $this->user, $this->pwd);
            } catch (PDOException $e) {
                echo "Conection Failed............" . $e->getMessage();
            }
        }
        return self::$pdo;
    }
}
