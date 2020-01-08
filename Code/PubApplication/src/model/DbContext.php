<?php
include_once 'item.php';

class DbContext
{
    private $db_server = 'proj-mysql.uopnet.plymouth.ac.uk';
    private $dbUser = 'ISAD251_SJordan';
    private $dbPassword = 'ISAD251_22215882';
    private  $dbDatabase = 'ISAD251_SJordan';

    private $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        try {
            if ($this->connection == null) {
                $this->dataSourceName = 'mysql:dbname=' . $this->dbDatabase . ';host=' . $this->db_server;
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword);
                $this->connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
        } catch (PDOException $err) {
            echo 'Connection failed: ', $err->getMessage();
        }
    }

    public function AvailableItems()
    {
        $sql = "SELECT * FROM `availableitems`";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $ViewAvailableItems = [];

        if($resultSet)
        {
            foreach ($resultSet as $row)
            {
                $ViewItems = new item($row['item_id'],$row['category_id'],$row['item_name'],$row['item_cost'],$row['item_amount']);
                $ViewAvailableItems[] = $ViewItems;
            }
        }
        return $ViewAvailableItems;
    }
}