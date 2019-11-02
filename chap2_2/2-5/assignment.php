<pre>
<?php
$a = 100;
$b = $a + 1;

var_dump($a);
var_dump($b);
?>

<?php
$a = $b = $c = 100;

var_dump($a);
var_dump($b);
var_dump($c);
?>

<?php
$a = 0;
$a += 10;

var_dump($a);
?>

<?php
$a = "Hello";
$b = " World!";
$a .= $b;

var_dump($a);
?>

<?php
$a = 10;
$b = 2;

$c = $a ** $b;

var_dump($c);
?>
</pre>