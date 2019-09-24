<?php # p96 戻り値の型指定
    # 引数の値を2倍にしてint型で返す関数
    function twice(float $var) : int{
        $var *= 2;

        return $var;
    }

    $num = 10.8;
    $result = twice($num);

    echo "{$num}の2倍は" . $result;
?>