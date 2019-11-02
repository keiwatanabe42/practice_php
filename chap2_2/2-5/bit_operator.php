<?php
$a = 3;
$b = 5;

$bitShiftLeft = $a << $b;

var_dump($bitShiftLeft);
var_dump(decbin($bitShiftLeft));
?>

<br>
<?php
$a = 16;
$b = 3;

$bitShiftRight = $a >> $b;

var_dump($bitShiftRight);
var_dump(decbin($bitShiftRight));
?>

<br>
<?php // ビット積　ビット和　排他的ビット和　ビット否定
$a = 0b1100;
$b = 0b1010;

$bitSum = $a & $b; // 0b1000
$bitSubject = $a | $b; // 0b1110
$bitExclusive = $a ^ $b; // 0b0110
$bitNot = ~$a; // 0b0011

//var_dump($bitSum);
var_dump(decbin($bitSum));
//var_dump($bitSubject);
var_dump(decbin($bitSubject));
var_dump(decbin($bitExclusive));
var_dump(decbin($bitNot));
?>