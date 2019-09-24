<?php # p95 ユーザ定義関数の引数の型を指定
    # 引数は整数型で宣言
    # 引数の値を2倍にして戻す関数
    function twice(int $var){
        $var *= 2;
        return $var;
    }

    # execute
    $num = 10.8;
    $result = twice($num);
    
    echo "{$num}の2倍は ", $result;
?> 