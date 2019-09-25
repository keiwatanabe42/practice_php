<?php # p101 変数の参照渡し $var に $num のアドレスを渡している
    # 引数に変数の参照を受け取る
    function oneUp(&$var){
        $var += 1;
    }

    # execute
    $num = 5;
    oneUp($num); # $numを渡す
    echo $num; # $num に１が加算される
?>