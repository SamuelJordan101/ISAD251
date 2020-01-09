<?php
//this is the page for the admin to view all the items
include_once 'header.php';
include_once '../src/model/DbContext.php';
?>

<body style="text-align: center">
<h1>Current Items</h1><br>

<table class="table" style="width: 50%; margin-left: 25%">
    <thead>
    <tr>
        <th scope="col">Item ID</th>
        <th scope="col">Category ID</th>
        <th scope="col">Item Name</th>
        <th scope="col">Item Cost</th>
        <th scope="col">Item Amount</th>
    </tr>
    </thead>
    <tbody>

        <?php
        $Item_Row = "";

        //getting the data and outputting it in a table

        $db = new DbContext();
        $items = $db->ItemView();

        if ($items) {
            foreach ($items as $item) {
                $Item_Row .= "<tr><td>" . $item->item_id() . "</td>" . "<td>" . $item->category_id() . "</td>" . "<td>" . $item->item_name() . "</td>" . "<td>£" . $item->item_cost() . "</td>" . "<td>" . $item->item_amount() . "</td>" . "</td></tr>";
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
