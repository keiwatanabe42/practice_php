<?php #bit演算の桁移動
    $a = 20; #2進数に変換し2進数の桁移動が行われる。結果表記はint型の10進数になる
    $b = 2;
    
    var_dump($a << $b);
    var_dump($a >> $b);

?>