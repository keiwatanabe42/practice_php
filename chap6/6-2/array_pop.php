<?php # 177 配列の末尾を配列から削除して取り出し、新しい変数に格納
$myArray = ["a", "b", "c", "d", "e"];

$removed = array_pop($myArray); # 末尾の要素を取り出す。（$myArrayから削除される）
echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>