<?php
include_once 'item.php';
include_once  'orders.php';

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

    public function OrderNew($request)
    {
        $sql = "CALL OrderNew(:UserID, :TableNumber)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':UserID', $request->user_id(), PDO::PARAM_INT);
        $statement->bindParam(':TableNumber', $request->table_number(), PDO::PARAM_INT);

        $return = $statement->execute();
        return $return;
    }

    public function OrderCancel($request)
    {
        $sql = "CALL OrderCancel(:order_id)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':order_id', $request->order_id(), PDO::PARAM_INT);

        $return = $statement->execute();
        return $return;
    }

    public function OrderView()
    {
        $sql = "SELECT * FROM `allorders`";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $ViewAllOrders = [];

        if($resultSet)
        {
            foreach ($resultSet as $row)
            {
                $ViewOrders = new orders($row['order_id'],$row['user_id'],$row['order_date'],$row['table_number']);
                $ViewAllOrders[] = $ViewOrders;
            }
        }
        return $ViewAllOrders;
    }

    public function ItemView()
    {
        $sql = "SELECT * FROM `allitems`";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $ViewAllItems = [];

        if($resultSet)
        {
            foreach ($resultSet as $row)
            {
                $ViewItems = new item($row['item_id'],$row['category_id'],$row['item_name'],$row['item_cost'],$row['item_amount']);
                $ViewAllItems[] = $ViewItems;
            }
        }
        return $ViewAllItems;
    }

    public function ItemEdit($request)
    {
        $sql = "CALL AdminEditItem(:ItemID, :CategoryID, :ItemName, :ItemCost, :ItemAmount)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':ItemID', $request->item_id(), PDO::PARAM_INT);
        $statement->bindParam(':CategoryID', $request->category_id(), PDO::PARAM_INT);
        $statement->bindParam(':ItemName', $request->item_name(), PDO::PARAM_STR);
        $statement->bindParam(':ItemCost', $request->item_cost(), PDO::PARAM_INT);
        $statement->bindParam(':ItemAmount', $request->item_amount(), PDO::PARAM_INT);

        $return = $statement->execute();
        return $return;
    }

}