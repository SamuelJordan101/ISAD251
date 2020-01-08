<?php
error_reporting(0);
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/orders.php';

if (!isset($db)) {
    $db = new DbContext();
}
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
                <span class="input-group-text" id="inputGroup-sizing-default">Order ID</span>
            </div>
            <input type="text" name="order_id" id="order_id" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
    </div>
    <button type="submit" name="OrderCancel" style="" class="btn btn-secondary">Cancel Order</button><br><br>
</form>

<?php
$resultString = "<div class=\"row\"><div class=\"col-sm-12\"><div class=\"card border-success mb-3\">
                    <div class=\"card-header bg-success text-white\"> Your order has been cancelled</div></div></div></div>";
if ($success > 0) {
    echo $resultString;
}
?>

</body>

<?php
include_once 'footer.php';
?>
