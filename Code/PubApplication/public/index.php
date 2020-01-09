<?php
include_once 'header.php';
include_once '../src/model/DbContext.php';
include_once '../src/model/item.php';
?>

<body style="text-align: center" style="min-height: 80%">
<br>
<h1>User Options</h1><br>
<button type="button" class="btn btn-secondary" onclick="window.location.href = 'ordernew';">Add New Order</button>
<button type="button" class="btn btn-secondary" onclick="window.location.href = 'orderadd';">Add To Order</button>
<button type="button" class="btn btn-secondary" onclick="window.location.href = 'ordercancel';">Cancel Orders</button><br><br>
<button type="button" class="btn btn-secondary" onclick="window.location.href = 'orderview';">View Orders</button>
</body>

<?php
include_once 'footer.php';
?>
