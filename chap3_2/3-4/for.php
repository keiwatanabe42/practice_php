<?php // countup
for($index = 0; $index < 10; $index++){
    echo "{$index}回。";
}
?>

<br>
<?php // countdown
for($index2 = 10; $index2 > 0; $index2--){
    echo "{$index2}回。";
}
?>

<br>
<?php
$price = 0;
// カウンタを人数として計算する
for($cntPerson = 1; $cntPerson <= 6; $cntPerson++){
    if($cntPerson <= 3){
        $price += 1000;
    }else{
        $price += 500;
    }
    echo "{$cntPerson}人、{$price}円。";
}
?>

<br>
<pre>
<?php // for nest
for($index1 = 0; $index1 <= 3; $index1++){
    for($index2 = 0; $index2 <= 5; $index2++){
        echo $index1, "-", $index2. " | ";
    }
    echo "<br>";
}
?>

<?php // for break
$list = array(20, -32, 50, -5, 40);
$sum = 0;
for ($i = 0; $i < count($list); $i++){
    $value = $list[$i];
    if($value < 0){
        $sum = "合計：マイナスの値 {$value} が含まれていたので中断しました。";
        break;
    }
    $sum += $value;    
}

echo "合計：", $sum;
?>

<br>
<?php // for continue
$sum = 0;
for($i = 0; $i < count($list); $i++){
    $value = $list[$i];
    if($value < 0){
        continue;
    }

    $sum += $value;
}

echo "合計：", $sum;
?>
