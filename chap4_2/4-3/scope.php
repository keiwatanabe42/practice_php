<?php // スコープミスで正常な値段が表示されない

$number = 2;

// 個数から合計料金を算出
function calculation(){
    $price = 250 * $number;
    echo  "{$price} 円";
}

echo "{$number} 個で";
calculation();
?>

<?php

$tax = 0.08;
// 料金と個数に消費税を入れた料金を表示
function taxPriceCalculation($price, $number2){
    $sum = $price * $number2 * (1 + $tax);
    echo "{$sum}円です。";
}

taxPriceCalculation(250, 4);
echo "税込{$tax}%";
?>

<br>
<?php // function内で$taxを使えるようにするために、スコープをグローバルにする
// 料金と個数に消費税込みの料金を表示
function taxPriceCalculation2($price, $number){
    global $tax;
    $sum = $price * $number * (1 + $tax);
    echo "{$sum} 円です。";
}

taxPriceCalculation2(250, 4);
echo "{$tax} %";
?>

<br>
<?php // スタティック変数
// countup関数
function countup(){
    static $count = 0;
    $count++;
    return $count;
}

// 10回繰り返しカウントアップして表示
for($i = 0; $i < 10; $i++){
    $number = countup();
    echo $number, "回目。";
}
?>
