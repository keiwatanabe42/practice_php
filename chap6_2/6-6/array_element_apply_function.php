// 配列の要素で関数を繰り返し実行する
<br>
// 配列の日本円の値を取る換算する
<br>
<?php // array_walk(&$array, callbackFunction, userdataVariable) : 各要素を引数にしてコールバック関数を繰り返し実行する。結果はboolで返す
// callback(arrayValue, arrayKey, userdataVariavle) : 任意の変数をコールバック関数の第３引数へ渡すことができる。

// ドル換算する関数
function exchangeYenToDollar($yen, $key, $yenToDollarArray){
    $rate = $yenToDollarArray["rate"];
    if($rate == 0){
        return;
    }
    $dollar = $yen / $rate;
    $dollar = sprintf('%.2f', $dollar);
    
    echo "<li>", $yenToDollarArray["symbol"], $dollar, "</li>\n";

}

$priceYen = [2300, 1200, 4000];
$dollarRateArray = ["symbol" => "$", "rate" => 112.50];

echo "<ul>\n";
array_walk($priceYen, "exchangeYenToDollar", $dollarRateArray);
echo "</ul>\n";
?>

<br><br>
// 配列の要素全てに同じ関数を適用する
<br>
// 配列にはいってる円をドルに換算する
<br>
<?php // $result = array_map(callback, $array) : コールバック関数で処理した結果できた配列が$resultに返される
// callback($value)
// 円をドル換算するコールバック関数
function exchangeYenToDollar2($yen){
    global $rate;
    if($rate == 0){
        return;
    }
    $dollar = $yen / $rate;
    $dollar = round($dollar * 100)/ 100;
    return $dollar;
}
$yenArray = [2300, 1200, 4000];
$rate = 112.50;

$dollar = array_map("exchangeYenToDollar2", $yenArray);

print_r($dollar);
?>

<br><br>
// 複数の配列を並列に処理する
<br>
// 2つの配列をコールバック関数で合わせてマラソンの通過地点でのスプリットタイムを表示する
<br>
<?php // $result = array_map(callback, array1, array2, ...) : 複数配列を扱える。各配列の要素数は一致していなければならない。
      // resultにはコールバック関数のreturn値がはいる。無い場合はreturnなしでも可能
// 地点とスプリットタイムを表示する関数
function combineArray($point, $splitTime){
    echo "<li>", $point, " -- ", $splitTime, "</li>\n";
} 

$pointArray = ["10km", "20km", "30km", "40km", "Goal"];
$splitTimeArray = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];

echo "<ul>\n";
array_map("combineArray", $pointArray, $splitTimeArray);
echo "</ul>\n";
?>