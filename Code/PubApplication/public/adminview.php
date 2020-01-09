<?php
//this is the page for the admin to view all of the orders
include_once 'header.php';
include_once '../src/model/DbContext.php';

?>

<body style="text-align: center">
<h1>View Customer Orders</h1><br>

<table class="table" style="width: 50%; margin-left: 25%">
    <thead>
    <tr>
        <th scope="col">Order ID</th>
        <th scope="col">User ID</th>
        <th scope="col">Order Date</th>
        <th scope="col">Table Number</th>
    </tr>
    </thead>
    <tbody>

    <?php

    //getting the data and outputting it in a table

    $Item_Row = "";

    $db = new DbContext();
    $items = $db->OrderView();

    if ($items) {
        foreach ($items as $item) {
            $Item_Row .= "<tr><td>" . $item->order_id() . "</td>" . "<td>" . $item->user_id() . "</td>" . "<td>" . $item->order_date() . "</td>" . "<td>" . $item->table_number() . "</td>" . "</td></tr>";
        }
    }
    echo $Item_Row;

    ?>

    </tbody>
</table>

</body>

<?php
include_once 'footer.php';
?>
