<?php #p57
    $test1 = TRUE;
    $test2 = FALSE;

    $hantei1 = $test1 and $test2; # $hantei1 = $test1 として演算される
    $hantei2 = $test1 or $test2;
    
    var_dump($hantei1);
    var_dump($hantei2);
?>