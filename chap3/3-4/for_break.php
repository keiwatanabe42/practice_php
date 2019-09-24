<?php
    $list = array(20, -32, 50, -5, 40);
    $count = count($list); # 配列の個数を出力
    $sum = 0;

    for($i = 0; $i < $count; $i++){
        $value = $list[$i];
        # 配列の要素に負の値が含まれている場合
        if($value < 0){
            $sum = "マイナスの値 {$value} が含まれていたので中断しました。";
            break;
        }else{
            $sum += $value;
        }
    }
    echo "合計：{$sum}";
?>