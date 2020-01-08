<?php
error_reporting(0);
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/item.php';

if (!isset($db)) {
    $db = new DbContext();
}
if (isset($_POST['EditItem']))
{
    $request = new item($_POST['item_id'],$_POST['category_id'],$_POST['item_name'],$_POST['item_cost'],$_POST['item_amount']);
    $success = $db->ItemEdit($request);
}

?> <br>

<body style="text-align: center">
<h1>Edit Items</h1><br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Item ID</span>
            </div>
            <input type="text" name="item_id" id="item_id" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Category ID</span>
            </div>
            <input type="text" name="category_id" id="category_id" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Item Name</span>
            </div>
            <input type="text" name="item_name" id="item_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Item Cost (£)</span>
            </div>
            <input type="text" name="item_cost" id="item_cost" placeholder="5.00" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Item Amount</span>
            </div>
            <input type="text" name="item_amount" id="item_amount" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <button type="submit" name="EditItem" style="" class="btn btn-secondary">Edit Item</button><br><br>
</form>

<?php
$resultString = "<div class=\"row\"><div class=\"col-sm-12\"><div class=\"card border-success mb-3\">
                    <div class=\"card-header bg-success text-white\"> The Item has been changed</div></div></div></div>";
if ($success > 0) {
    echo $resultString;
}
?>

<h2>All Current Items</h2><br>
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
</table><br><br>

<?php
include_once 'footer.php';
?>
