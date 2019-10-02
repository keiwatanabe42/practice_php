<?php # 184 配列を切り出す array_slice();
$myArray = ["a", "b", "c", "d", "e", "f"];
#top3
$slice1 = array_slice($myArray, 0, 3);
# No4, 5
$slice2 = array_slice($myArray, 3, 2);
# last 3
$slice3 = array_slice($myArray, -3); # -3 後ろから3つ

print_r($slice1);
print_r($slice2);
print_r($slice3);