<?php // $removed = array_splice(&$array, startIndex, length) : 指定した配列の要素を削除する。削除された要素は変数$removedに格納される
$myArray = ["a", "b", "c", "d", "e"];
// delete array element  （splice:スプライス : 解いて繋げるみたいな意味)
$removed = array_splice($myArray, 1, 2); // delete b, c

// display
echo "配列の要素削除後 : ";
print_r($myArray); // 配列のインデックス番号はリセットされて再度割り振られる
echo "<br>\n";
echo "削除した配列の要素 : ";
print_r($removed);
?>

<br><br>
<?php // array_splice()で連想配列の要素を削除してみる
$myArray = [];
$myArray = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50];
$removed = array_splice($myArray, 1, 2);

echo "元の配列 : ";
print_r($myArray);
echo "<br>";
echo "削除した要素";
print_r($removed);
?>

<br><br>
<?php // array_shift(&$array) : 配列の先頭から値を取り出す
$myArray = [];
$myArray = ["a", "b", "c", "d"];

$removed = array_shift($myArray);

echo "実行後 ： ";
print_r($myArray);
echo "<br>";
echo "抜き出した先頭要素 : ";
print_r($removed);
?>

<br><br>
<?php // array_pop(&$array) : 配列の末尾から要素を取り出す
$removed = array_pop($myArray);

echo "実行後　：　";
print_r($myArray);
echo "<br>";
echo "抜き出した要素 : ";
print_r($removed);
?>

<br><br>
<?php // array_splice(&$array, Index, Length, Replace) : 指定した配列の要素を除去して、置換する

$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];

$removed = array_splice($myArray, 1, 2, $replace);

echo "置換後配列　：　";
print_r($myArray);
echo "<br>";
echo "除去した配列の要素 : ";
print_r($removed);

// 除去する要素と置換する要素の個数が違う場合
echo "<br>";

$myArray = ["a", "b", "c", "d", "e"];
$replacePlus = ["X", "Y", "Z", "A"];

$removed = array_splice($myArray, 1, 2, $replacePlus);

echo "置換後配列　：　";
print_r($myArray);
echo "<br>";
echo "除去した配列の要素 : ";
print_r($removed);// 置換前後で要素数が異なっても問題ない
?>

<br><br>
<?php // 配列と配列を連結する +演算子の場合
$arrayA = ["a", "b", "c"];
$arrayB = ["d", "e", "f", "g", "h"];

$link = $arrayA + $arrayB;

print_r($link); // a, b, c, g, h : $arrayAのインデックスが存在しない部分から$arrayBの要素が加算される
?>

<br><br>
<?php // array_merge($arrayA, $arrayB, ...) : 配列同士の連結
$link = array_merge($arrayA, $arrayB);
// $arrayAの全要素の後ろに$arrayBの要素が連結される
print_r($link); // a, b, c, d, e, f, g, h
?>

<br><br>
<?php // 配列が３つの場合
$arrayB = ["d", "f", "g"];
$arrayC = ["g", "h"];

$link = array_merge($arrayA, $arrayB, $arrayC);

print_r($link); // a, b, c, d, e, f, g, h
?>

<br><br>
<?php // 連想配列でarray_merge()した時、キーが重複している場合
$arrayA = ["a" => 1, "b" => 2, "c" => 3];
$arrayB = ["b" => 40, "d" => 50];

$link = array_merge($arrayA, $arrayB);
// キーが重複している場合、後の連想配列の値で上書きされる
print_r($link);
?>

<br><br>
<?php // array_merge_recursive() : 連想配列の重複キーの扱いに先ほどのarray_merge()と違いがある　recursive : 繰り返し用いられる（再帰的）
$arrayA = ["a" => 1, "b" => 2, "c" => 3];
$arrayB = ["b" => 40, "d" => 50];
// array_merge_recursive() : 重複キーの値を多重配列にして全てのこす
$link = array_merge_recursive($arrayA, $arrayB);
print_r($link);
?>

<br><br>
<?php // array_combine($key, $value) : ２つの配列から連想配列を作る
// マラソンの各点におけるスプリットタイムについて、連想配列を作成する
$point = ["10km", "20km", "30km", "40km", "Goal"];
$split = ["00:50:37", "09:39:15", "02:28:25", "03:21:37", "03:34:44"];
// 通過地点をキー、スプリットタイムを値として連想配列を作成する
$associativeArray = array_combine($point, $split);

print_r($associativeArray);
?>

<br><br>
<?php // array_unique($array) : 配列から重複した値を除去する
$colorA = ["green", "red", "blue"];
$colorB = ["blue", "pink", "yellow"];
$colorC = ["pink", "white"];
// 配列をひとつに連結する
$link = array_merge($colorA, $colorB, $colorC);
// 重複した値を除去する
$uniqueArray = array_unique($link);

print_r($link);
echo "<br>";
print_r($uniqueArray);
?>

<br><br>
<?php // array_slice($array, startIndex, Length) : 配列を切り出し
$myArray = ["a", "b", "c", "d", "e", "f"];
// top3
$sliceTop3Array = array_slice($myArray, 0, 3);
// 4, 5
$slice4to5Array = array_slice($myArray, 3, 2);
// last 3
$sliceLast3Array = array_slice($myArray, -3);

print_r($sliceTop3Array);
echo "<br>";
print_r($slice4to5Array);
echo "<br>";
print_r($sliceLast3Array);
?>