<?php

class Db
{
    private $DB_SERVER;
    private $DB_USER;
    private $DB_PASSWORD;
    private $DB_DATABASE;

    public function connect()
    {
        $this->DB_SERVER = 'proj-mysql.uopnet.plymouth.ac.uk';
        $this->DB_USER = 'ISAD251_SJordan';
        $this->DB_PASSWORD = 'ISAD251_22215882';
        $this->DB_DATABASE = 'ISAD251_SJordan';

        try {
            $dsn = "mysql:host=" . $this->DB_SERVER . ";dbname=" . $this->DB_DATABASE . ";";
            $pdo = new PDO($dsn, $this->DB_USER, $this->DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo "Connection Failed: " . $err->getMessage();
        }


        return $pdo;
    }
}