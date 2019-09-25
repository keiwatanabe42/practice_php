<?php # p103　可変変数　変数の値を変数名として利用できる
    $unitPrice = 230;
    $quantity = 5;
    # 変数に変数名を入れる
    $tanka = "unitPrice";
    $kosu = "quantity";
    # 入っている変数名の変数を使って計算する
    $ryoukin = $$tanka * $$kosu;

    echo "{$ryoukin} 円";
?>