<?php
error_reporting(0);
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/orderitem.php';
include_once '../src/model/orders.php';

if (!isset($db)) {
    $db = new DbContext();
}
if (isset($_POST['AddOrder']))
{
    $request = new orders(0,$_POST['user_id'],0 ,$_POST['table_number']);
    $success = $db->OrderNew($request);
}

?>

<body style="text-align: center">
<h1>New Order</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">User ID</span>
            </div>
            <input type="text" name="user_id" id="user_id" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <div class="form-row" style="margin-left: 25%; width: 50%">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Table Number</span>
            </div>
            <input type="text" name="table_number" id="table_number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <button type="submit" name="AddOrder" style="" class="btn btn-secondary">Create Order</button><br><br>
</form>

<?php
$resultString = "<div class=\"row\"><div class=\"col-sm-12\"><div class=\"card border-success mb-3\">
                    <div class=\"card-header bg-success text-white\"> Your order has been created<br><br><button type=\"button\" name=\"AddItems\" style=\"\" onclick=\"window.location.href ='orderadd'\" class=\"btn btn-secondary\">Add Items</button><br></div></div></div></div>";
if ($success > 0) {
    echo $resultString;
}
?>

</body>

<?php
include_once 'footer.php';
?>
