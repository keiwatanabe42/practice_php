<?php
$who = "watanabe";
$hello = "Hello";
$msg = $who. " san ". $hello;

echo $msg;
?>

<br>
<?php #数値をピリオド連結すると自動的に文字列に型変換される。
$num = 19 + 1;
$msg1 = "No.". $num. PHP_EOL;
$msg2 = $num. 77;

echo $msg1;
echo $msg2;
?>