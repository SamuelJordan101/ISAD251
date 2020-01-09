<?php
//this is the admin home page, it has links to all the admin functions
include_once 'header.php';
?>



<body style="text-align: center">
    <br><h1>Admin Options</h1><br>
    <button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'adminitemnew';">Add New Items</button>
    <button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'adminitemedit';">Edit Items</button>
    <button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'adminitemview';">View Items</button><br><br>
    <button type="button" class="w-25 btn btn-secondary" onclick="window.location.href = 'adminview';">View Orders</button>
</body>

<?php
include_once 'footer.php';
?>
