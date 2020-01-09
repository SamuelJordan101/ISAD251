<?php
//page where the customer can cancel an order
error_reporting(0);
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/orders.php';

if (!isset($db)) {
    $db = new DbContext();
}
//php which calls the 'OrderCancel' function
if (isset($_POST['OrderCancel']))
{
    $request = new orders($_POST['order_id'],0,0 ,0);
    $success = $db->OrderCancel($request);
}

?>

<body style="text-align: center">
<h1>Cancel Order</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Order ID</label>
            </div>
            <select class="custom-select" id="order_id" name="order_id">
                <option selected>Choose...</option>
                <?php
                // php to prepopulate a dropdown
                $optionString = "";

                $db = new DbContext();
                $order = $db->OrderView();

                if ($order) {
                    foreach ($order as $orders) {
                        $optionString.="<option value=".$orders->order_id().">".$orders->order_id()."</option>";
                    }
                }



                echo $optionString;
                ?>
            </select>
        </div>
    </div>
    <button type="submit" name="OrderCancel" style="" class="btn btn-secondary">Cancel Order</button><br><br>
</form>

<?php
// php for a successful order cancel
$resultString = "<div class=\"row\"><div class=\"col-sm-12\"><div class=\"card border-success mb-3\">
                    <div class=\"card-header bg-success text-white\"> Your order has been cancelled</div></div></div></div>";
if ($success > 0) {
    echo $resultString;
}
?>

<h2>Your Orders</h2>

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

    //outputs the orders in a table

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

</body>

<?php
include_once 'footer.php';
?>
