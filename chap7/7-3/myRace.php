<?php
require_once("Runner.php");
?>

<?php
$player = new Runner("福士", 23);

print_r($player);

$player -> play();
?>