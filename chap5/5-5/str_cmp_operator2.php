<?php # p136 キャスト演算子
function compare($a, $b){
    if($a < $b){
        echo "{$a}、{$b}の順。\n";
    }else if ($a == $b){
        echo "{$a}、{$b}は同じ。\n";
    }else if ($a > $b){
        echo "{$b}、{$a}の順。\n";
    }
}

# 文字列と数値の比較
compare("120", 99);
compare("A5", 0);
# $num を String 型にキャストして比較
$num = 99;
compare("A5", (string)$num);
