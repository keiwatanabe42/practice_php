<?php # 180 連想配列でkeyがかぶってる場合、後の配列の値で上書きされる
# key "b" がかぶってる配列
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50];
# 連結する
$result = array_merge($a, $b);
print_r($result);
?>