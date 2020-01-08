<?php
include_once 'header.php';
include_once '../src/model/DbContext.php';

?>

<body style="text-align: center">
<h1>View Orders</h1>

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
</table><br><br>

<h2>All Items Ordered</h2>

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

<?php
include_once 'footer.php';
?>
