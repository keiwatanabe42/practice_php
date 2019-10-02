<?php # 186 foreachとifで正の値のみの合計値を算出する
$valuelist = [5, -3, 12, 6, 9];
$sum = 0;

#配列から順に値を取り出す
foreach($valuelist as $value){
    # 取り出した値が正の値の時、$sumに足す
    if($value > 0){
        $sum += $value;
    }
}

echo "正の値の合計は {$sum} です。";
?>