<?php
    function myFunc(){
        # すべての引数
        $allArgs = func_get_args();
        # 引数の値の合計
        $total = array_sum($allArgs); # 配列の中身の合計
        # 引数の個数
        $numArgs = func_num_args();

        # 引数ありの場合、平均値と最後の引数の値を取得、ない場合はデータ無しの文言で初期化
        if($numArgs > 0){
            $average = $total/$numArgs;
            # 最後の値を取り出す
            $lastValue = func_get_arg($numArgs - 1);
        } else {
            $lastValue = $average = $total = " (データ無し) ";
        }

        echo "合計点", $total , "<br>";
        echo "平均点", $average , "<br>";
        echo "最後の点数", $lastValue, "<br>";
    }

    # execute
    myFunc(43, 67, 55, 75);
?>