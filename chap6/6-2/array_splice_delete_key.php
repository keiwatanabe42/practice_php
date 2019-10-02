<?php # 176 連想配列での値削除 array_splice()
$myArray = [
    "a" => 10,
    "b" => 20,
    "c" => 30,
    "d" => 40,
    "e" => 50,
];

$removed = array_splice($myArray, 1, 2);

echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>