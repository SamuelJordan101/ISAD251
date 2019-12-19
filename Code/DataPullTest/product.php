<?php

class product extends Db
{
    public function getAllProducts()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM item");
        $stmt->execute();

        echo '<table style="width:50%; border: 1px solid black; text-align: left;">
        <th>ID</th>
        <th>Category</th>
        <th>Item Name</th>
        <th>Item Cost</th>
        <th>Item Amount</th>
        <th>Item Available</th>
        ';
        while($row = $stmt->fetch())
        {
            echo '<tr>';
            echo '<td>' . $item_id = $row['item_id'] . '</td>';
            echo '<td>' . $category_id = $row['category_id'] . '</td>';
            echo '<td>' . $item_name = $row['item_name'] . '</td>';
            echo '<td>£' . $item_cost = $row['item_cost'] . '</td>';
            echo '<td>' . $item_amount = $row['item_amount'] . '</td>';
            $item_available = $row['item_available'];
            if($item_available)
                echo '<td>' . 'True' . '</td>';
            else
                echo '<td>' . 'False' . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}