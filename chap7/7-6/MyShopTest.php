<?php
require_once("MyShop.php");
?>

<?php
$myShop = new MyShop();

$myShop -> sells(240, 3);
$myShop -> sells(400, 1);
$myShop -> getSales(); // 720 + 400 = 1120
?>