<?php # p119 フォーマット文字列を配列の値で置換して表示する vprintf()
$max = 15.69;
$min = 11.32;
$ave = 13.218;
# 置換する配列
$data = array($max, $min, $ave);
# フォーマット文字列
$format = '最大値 %.1f 最小値 %.1f 平均値 %.1f';
# 値を置換して表示する
vprintf($format, $data);
?>