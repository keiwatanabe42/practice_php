<?php # 98 taxをグローバルスコープにし、グローバル変数として利用したバージョン
    #税金
    $tax = 0.08; 

    #料金を計算する
    function taxprice($tanka, $kosu){
        global $tax; # グローバル変数を使う
        $ryoukin = $tanka * $kosu * (1 + $tax); # $taxに値がちゃんと入る
        echo "{$ryoukin}円です。";
    }

    # execute
    taxprice(250, 4);
    echo "税込み " . $tax * 100 , "%";
?>