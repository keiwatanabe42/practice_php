<?php # p85 function mt_rand
    for($i = 1; $i <= 10; $i++){
        $num = mt_rand(1, 100);
        if($i != 10){
            echo "{$num}, ";
        }else{
            echo "{$num}";
        }
    }
?>