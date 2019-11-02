<?php // while
$sumArray = array();

while(count($sumArray) < 5){
    $num = mt_rand(0, 50);
    // 配列に指定の値が存在する場合
    if(!in_array($num, $sumArray)){
        array_push($sumArray, $num); // 配列の最後に値を追加
    }
}

print_r($sumArray);
?>

<br>
<?php // do while

do{
    $a = mt_rand(1, 13);
    $b = mt_rand(1, 13);
    $c = mt_rand(1, 13);

    $sum = $a + $b + $c;

    if($sum == 21){
        break;
    }
}while(TRUE);

echo "合計が21になる３この数字。{$a}、{$b}、{$c}";