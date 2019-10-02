<?php # 175 array_splice() インデックス配列から値を削除 splice : つなぎ合わせる
$myArray = ["a", "b", "c", "d", "e"];
# 配列の要素を削除 array_splice(Array, index, length);
$removed = array_splice($myArray, 1, 2); # index 1 ~ length 2

echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>