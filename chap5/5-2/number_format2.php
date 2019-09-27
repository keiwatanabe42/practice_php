<?php # p120 3桁区切りかつ、小数点以下の指定 number_format()
$num = 235.365;
$length = number_format($num, 2);
echo $length, "m";
?>