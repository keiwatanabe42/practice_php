<?php # p75 do while
    do{
        $a = mt_rand(1, 13);
        $b = mt_rand(1, 13);
        $c = mt_rand(1, 13);
        $abc = $a + $b + $c;

        if($abc == 21){
            break;
        }
    } while(TRUE);

    echo "合計が２１になる３個の数字。 {$a}、{$b}、{$c}";
?>