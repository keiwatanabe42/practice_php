<?php # 182 array_uniqueで重複した値を取り除く unique : 一意
$a = ["green", "red", "blue"]; 
$b = ["blue", "pink", "yellow"]; 
$c = ["pink", "white"];

#配列を連結
$all = array_merge($a, $b, $c);
#重複した値を削除
$unique = array_unique($all);

print_r($all);
print_r($unique);
?>