// 名前の配列からリストを作る
<?php
$nameArray = ["赤井一郎", "伊東五郎", "上野信二"];

echo "<ol>\n";
// foreachで名前をリスト表示
foreach($nameArray as $name){
    echo "<li>", $name, "さん</li>\n";
}
echo "</ol>\n";
?>

<br><br>
// 配列の正の値を合計する
<br>
<?php
$valueArray = [5, -3, 12, 6, 9];
$total = 0;
foreach($valueArray as $value){
    // 正の値のみ合計する
    if($value < 0){
        continue;
    }
    $total += $value;
}

echo "正の値の合計は{$total}です。\n";
?>

<br><br>
// foreachで連想配列のkeyとvalueを取り出す
<br>
<?php
$associativeArray = ["ID" => "TR123", "product" => "globe", "price" => 14500];
echo "<ul>\n";
// keyとvalueを取り出す。
foreach($associativeArray as $key => $value){
    echo "<li> {$key} : {$value} </li>\n";
}
echo "</ul>\n";
?>

<br><br>
// 配列から正の値だけを抽出する
<br>
<?php // array_filter($array, callback) : 条件に合う（コールバック関数の結果がtrue）値を抽出して配列に格納する関数
//コールバック関数：任意の関数の引数に渡された関数のこと。　関数に渡される関数

// 正の値のときtrue判定となって、値が抽出されるようなコールバック関数
function isPlus($value){
    return $value > 0;
}
$associativeArray = ["a" => 3, "b" => 0, "c" => 5, "d" => -2, "e" => 4];
$plusValueArray = array_filter($associativeArray, "isPlus");

print_r($plusValueArray);
?>

<br><br>
// インデックス配列を変数に展開する
<br>
<?php // list($var1, $var2 ...) : インデックス配列の値を引数の変数に展開する関数
$indexArray = ["a987", "鈴木薫", 23];
// インデックス配列の値を変数に展開
list($var1, $var2, $var3) = $indexArray;

echo "会員ID　：　", $var1, "<br>\n";
echo "お名前　：　", $var2, "<br>\n";
echo "年齢　：　", $var3, "\n";
?>