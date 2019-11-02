// 配列を昇順にソート
<br>
<?php // sort(&$array) : 引数の配列を昇順にソートする関数
$indexArray = [23, 16, 8, 42, 15, 4];
// 昇順にソート
sort($indexArray);

print_r($indexArray);
?>

<br><br>
// 配列を降順にソート
<br>
<?php // rsort(&$array) : 配列を降順にソート
rsort($indexArray);

print_r($indexArray);
?>

<br><br>
// 複製した配列をソートする
<br>
<?php
$indexArray = [23, 16, 8, 42, 15, 4];
// 配列を別の変数に初期化することでコピーする
$clone = $indexArray;
// 複製した配列をソート
sort($clone);
echo "オリジナル : ";
print_r($indexArray);

echo "<br>\n";
echo "複製 昇順：";
print_r($clone);

echo "<br>\n";
rsort($clone);
echo "複製 降順：";
print_r($clone);
?>

<br><br>
// 連想配列を昇順でソートする
<br>
<?php // asort(), arsort() : sort()などはソート後にインデックスキーがリセットされるが、こちらの関数はキーと値の関係は保つ ※ a = associative(連想)
$associativeArray = ["S" => 23, "M" => 36, "L" => 29];
asort($associativeArray);

print_r($associativeArray);
?>

<br><br>
// 値の並びをシャッフルする
<br>
<?php // shuffle(&$array) : 要素の並びをランダムに並び替える関数
$indexArray = ["田中", "鈴木", "佐藤", "杉山"];
// shuffle
$clone = $indexArray;
shuffle($clone);
echo "オリジナル : ";
print_r($indexArray);
echo "<br>\n";
echo "シャッフル後 : ";
print_r($clone);
?>

<br><br>
// 並びを逆順にする
<br>
<?php // array_reverse($array) : 配列の順序を逆順にして返す関数。第2引数はデフォルトfalseで、trueにするとインデックス番号がリセットされない。
$reverseArray = array_reverse($indexArray);
$reverseNotResetIndexArray = array_reverse($indexArray, true);
echo "オリジナル : ";
print_r($indexArray);
echo "<br>";
echo "逆順ソート後 : ";
print_r($reverseArray);
echo "<br>";
echo "インデックス番号リセット無し : ";
print_r($reverseNotResetIndexArray);
?>

<br><br>
// 自然順に並べる
<br>
<?php // natsort(&$array), natcasesort(&$array) : 自然順にソートする。sort(),asort()の第2引数でSORT_NATURALを指定してもできる
// 自然順：文字と数値が混じった値をソートした順番
$indexArray = ["image7", "image12", "image1"];
$clone1 = $indexArray;
$clone2 = $indexArray;
// 自然順にソート
natsort($clone1);
sort($clone2, SORT_NATURAL);

echo "オリジナル : ";
print_r($indexArray);
echo "<br>";
echo "自然順ソート(natsort()) : ";
print_r($clone1);
echo "<br>";
echo "自然順ソート(SORT_NATURAL) : ";
print_r($clone2);
?>
