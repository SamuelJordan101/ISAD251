<?php
//this is the page for the admin to add a new item to the menu
error_reporting(0);
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/item.php';
include_once '../src/model/orderitem.php';
include_once '../src/model/orders.php';
include_once '../src/model/category.php';

//user input for the 'AddOrderItem' function
if (!isset($db)) {
    $db = new DbContext();
}
if (isset($_POST['AddOrderItem']))
{
    $request = new item(0,$_POST['category_id'],$_POST['item_name'],$_POST['item_cost'],$_POST['item_amount']);
    $success = $db->AdminItemAdd($request);
}

?> <br>

<body style="text-align: center">
<h1>Add New Item</h1><br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Category ID</label>
            </div>
            <select class="custom-select" id="category_id" name="category_id">
                <option selected>Choose...</option>
                <?php
                $optionString = "";

                $db = new DbContext();
                $category = $db->Categories();

                if ($category) {
                    foreach ($category as $categories) {
                        $optionString.="<option value=".$categories->category_id().">".$categories->category_name()." (".$categories->category_id().")</option>";
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
                <span class="input-group-text" id="inputGroup-sizing-default"">Item Name</span>
            </div>
            <input type="text" name="item_name" id="item_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default"">Item Cost £</span>
            </div>
            <input type="number" name="item_cost" id="item_cost" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default"">Item Amount</span>
            </div>
            <input type="number" name="item_amount" id="item_amount" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <button type="submit" name="AddOrderItem" style="" class="btn btn-secondary">Add Item</button><br><br>
</form>

<?php
$resultString = "<div class=\"row\"><div class=\"col-sm-12\"><div class=\"card border-success mb-3\">
                    <div class=\"card-header bg-success text-white\"> The Item has been Added</div></div></div></div>";
if ($success > 0) {
    echo $resultString;
}
?>

<h2>Current Items</h2><br>

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
</table><br><br><br><br>
</body>

<?php
include_once 'footer.php';
?>
