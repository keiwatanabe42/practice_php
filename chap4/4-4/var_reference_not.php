<?php # p100 変数の値渡し
    # 変数の値を受け取る
    function oneUp($var){
        $var += 1;
    }

    # execute
    $num = 5;
    # 変数$numを渡す
    oneUp($num);
    # $numは引数で渡しただけなので、中身は変化していない
    echo $num;
?>