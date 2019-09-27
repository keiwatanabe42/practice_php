<?php # p120 数値を3桁区切りにする number_format()
$price = 1980 * 2;
$kingaku = number_format($price);
echo $kingaku, "円";
?>