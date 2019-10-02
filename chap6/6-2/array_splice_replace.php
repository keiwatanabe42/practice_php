<?php # X Y Z が　b c dの位置に格納され、 $removedに b c d　が格納される
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];

# 配列の要素を置換して、元の値を取り出す
$removed = array_splice($myArray, 1, 3, $replace);

echo '実行後：$myArray', "\n";
print_r($myArray); # a X Y Z e
echo '戻り：$removed', "\n";
print_r($removed); # b c d
?>