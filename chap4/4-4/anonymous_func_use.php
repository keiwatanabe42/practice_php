<?php
    # 無名関数で使う変数に値を指定する
    $msg = "ありがとう";
    $myFunc = function($who) use ($msg){
        echo "{$who} さん" . $msg;
    };

    # execute
    $myFunc("田中");
?>