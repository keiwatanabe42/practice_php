<?php # 98 taxのスコープミスによる、誤ったコード
    #税金
    $tax = 0.08; 

    #料金を計算する
    function taxprice($tanka, $kosu){
        $ryoukin = $tanka * $kosu * (1 + $tax); # $tax はユーザ定義関数内でのみ有効 = 値が入っていない
        echo "{$ryoukin}円です。";
    }

    # execute
    taxprice(250, 4);
    echo "税込み " . $tax * 100 , "%";
?>