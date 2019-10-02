<?php # 180 インデックス配列をarray_merge()関数を使って連結する
$a = ["a", "b", "c"];
$b = ["d", "e", "f"];
$c = ["g", "h"];

# インデックス配列を連結
$result = array_merge($a, $b, $c);
print_r($result);
?>