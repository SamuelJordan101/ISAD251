<?php
//this is the main customer page which has buttons to each of the functions
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/item.php';
?>

<body style="text-align: center" style="min-height: 80%">
<br>
<h1>User Options</h1><br>
<button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'ordernew.php';">Add New Order</button>
<button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'orderadd.php';">Add To Order</button>
<button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'ordercancel.php';">Cancel Orders</button><br><br>
<button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'orderview.php';">View Orders</button>
</body>

<?php
include_once 'footer.php';
?>
