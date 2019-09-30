<?php # p134 文字列と数値の比較　誤った処理
function check($a, $b){
    if($a == $b){
        echo "{$a} と {$b} は", "同じ。\n";
    }else{
        echo "{$a} と {$b} は", "違う。\n";
    }
}

#execute
check("7cm", "7cm");
check("7km", "7cm");
check("7人", 7);
check("PHP7", 7);
check("七", 0);
