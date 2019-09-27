<?php # p109  "" 変数{}で囲むと文字と変数の間に空白を入れなくても済む
    $thesize = "M";
    $theprice = 1200;
    $msg = "{$thesize}サイズ、 {$theprice}円";
    
    echo $msg;
?>