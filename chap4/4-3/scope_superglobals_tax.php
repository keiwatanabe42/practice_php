<?php # p99 taxをスーパーグローバル変数で値を取り出す
    #税金
    $tax = 0.08; 

    #料金を計算する
    function taxprice($tanka, $kosu){
        $ryoukin = $tanka * $kosu * (1 + $GLOBALS["tax"]); # $taxに値が入ってる
        echo "{$ryoukin}円です。";
    }

    # execute
    taxprice(250, 4);
    echo "税込み " . $tax * 100 , "%";
?>