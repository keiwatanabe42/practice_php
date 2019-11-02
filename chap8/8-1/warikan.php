<?php
$goukei = $_GET["goukei"];
$ninzu = $_GET["ninzu"];

$amari = $goukei % $ninzu;
$price = ($goukei - $amari) / $ninzu;
echo "{$goukei}円を{$ninzu}人で割り勘すると、";
echo "<br>";
echo "1人{$price}円を支払うとすると、不足分は{$amari}円です。";
?>