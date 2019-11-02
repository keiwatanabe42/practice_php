<?php // mt_rand() random function

for ($i = 0; $i < 10; $i++){
    $randNum = mt_rand(1, 100);
    echo $randNum, ", ";
}
?>

<br>
<?php // abs

$value = -120;

echo "{$value}の絶対値：", abs($value);
?>

<br>
<?php // ceil
$value = 12.3;

echo "{$value}の小数点以下切り上げ：", ceil($value);
?>

<br>
<?php // floor
echo "{$value}の小数点以下切り捨て：", floor($value);
?>

<br>
<?php // round
echo "{$value}の四捨五入：", round($value);
?>

<br>
<?php // max min
$minValue = 5;
$maxValue = 8;

echo "{{$minValue}, {$maxValue}}の最大値：", max($minValue, $maxValue);
echo "<br>";
echo "{{$minValue}, {$maxValue}}の最小値：", min($minValue, $maxValue);
?>

<br>
<?php // sqrt
$value = 16;
echo "{$value}の平方根：", sqrt($value);
?>

<br> 
<?php // pow
$a = 10;
$b = 2;

echo "{$a}の{$b}乗：", pow($a, $b);
?>

<br>
<?php // mt_rand
$value = mt_rand();
echo "乱数：", $value;
echo "<br>";
$value = mt_rand(1, 100);
echo "乱数1~100：", $value;
?>

<br>
<?php //pi

echo "円周率：", pi();
?>

<br>
<?php // sin cos tan
$theta = pi() / 180;

echo "sin", sin($theta);
echo "<br>";
echo "cos", cos($theta);
echo "<br>";
echo "tan", tan($theta);
?>

<br>
<?php // is_nan
$valueNum = 100;
$valueNotNum = sqrt(-1);
var_dump(is_nan($valueNotNum));
if(is_nan($valueNum)){
    echo "is Num"; 
}
echo "<br>";
if(is_nan($valueNotNum)){
    echo "{$valueNotNum} is Not Num"; 
}
?>

<br>
<?php // 木の高さを求める 距離：20m、角度：32°

$distance = 20;
$angle = 32;
$radian = $angle * pi() / 180;
// 小数点第一位以下で四捨五入
$tall = round(tan($radian) * $distance * 10)/ 10;

echo "木の高さは{$tall}mです。";
?>
