<?php # p97 変数スコープ　誤ったコード
    $kosu = 2;

    # 料金計算
    function price(){
        # $kosuはローカル変数であり、上記の$kosuとは同名だが別物
        $ryoukin = 2500 * $kosu; # 2500 * 0 = 0 と計算される
        echo "{$ryoukin} 円です。";
    }

    # execute
    echo "{$kosu}個で";
    price();
?>