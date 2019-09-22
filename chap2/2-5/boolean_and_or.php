<?php #p56
    $test1 = TRUE;
    $test2 = FALSE;

    #and or は = の方が優先順位が高いため（）が必要
    # ⇒ $hantei1 = $test1 から演算を始めてしまうため
    $hantei1 = ($test1 and $test2); 
    $hantei2 = ($test1 or $test2);

    var_dump($hantei1);
    var_dump($hantei2);
?>

