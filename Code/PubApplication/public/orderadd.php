<?php
error_reporting(0);
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/item.php';
include_once '../src/model/orderitem.php';
include_once '../src/model/orders.php';

if (!isset($db)) {
    $db = new DbContext();
}
if (isset($_POST['AddOrderItem']))
{
    $request = new orderitem($_POST['order_id'],$_POST['item_id'],$_POST['item_quantity']);
    $success = $db->OrderItemAdd($request);
}

?> <br>

<body style="text-align: center">
<h1>Add Items To Order</h1><br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Order ID</label>
            </div>
            <select class="custom-select" id="order_id" name="order_id">
                <option selected>Choose...</option>
                <?php
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
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Item ID</label>
            </div>
            <select class="custom-select" id="item_id" name="item_id">
                <option selected>Choose...</option>
                <?php
                $optionString = "";

                $db = new DbContext();
                $item = $db->AvailableItems();

                if ($item) {
                    foreach ($item as $items) {
                        $optionString.="<option value=".$items->item_id().">".$items->item_id()." (".$items->item_name().")</option>";
                    }
                }
                echo $optionString;
                ?>
            </select>
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default"">Item Quantity</span>
            </div>
            <input type="number" name="item_quantity" id="item_quantity" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <button type="submit" name="AddOrderItem" style="" class="btn btn-secondary">Add Order Item</button><br><br>
</form>

<?php
$resultString = "<div class=\"row\"><div class=\"col-sm-12\"><div class=\"card border-success mb-3\">
                    <div class=\"card-header bg-success text-white\"> The Item has been Added</div></div></div></div>";
if ($success > 0) {
    echo $resultString;
}
?>

<?php
include_once 'footer.php';
?>
