<?php #< >
$a = 7;
$b = 10;

$judge1 = ($a < $b);
$judge2 = ($a > $b);

var_dump($judge1);
var_dump($judge2);
?>

<br>
<?php
$point = 11.6;

if($point >= 10){
    echo "pass!";
}else{
    echo "failure";
}
?>

<br> 
<?php # NULLだった時は初期値で計算する
$price = 250 * ($kosu ?? 2);
var_dump($kosu);

echo $price; // 500
?>

<br>
<?php // 整数と文字列を比較する == != 型は関係なく比較
 $judge1 = ("99" == 99); // true
 $judge2 = ("99" != 99); // false

 var_dump($judge1);
 var_dump($judge2);
 ?>

 <br>
<?php // 型も比較する場合 === !==
$judge1 = ("99" === 99);
$judge2 = ("99" === 99);

var_dump($judge1);
var_dump($judge2);
?>