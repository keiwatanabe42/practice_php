<?php # incremnet
$a = 0;
$b = ++$a;

echo "\$aは{$a}、\$bは{$b}";
?>

<br>
<?php # postincrement
$a = 0;
$b = $a++;

echo "\$aは{$a}、\$bは{$b}";
?>

<br>
<?php #文字列をインクリメント
$myNum = "19"; //20
$myChar = "a"; //b
++$myNum;
++$myChar;

echo "\$myNumは{$myNum}、\myCharは{$myChar}";
?>

