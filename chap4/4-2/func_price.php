<?php # p88 function price
    function price($tanka, $kosu){
        $souryo = 250;
        $ryoukin = $tanka * $kosu;
        # 5000円未満は送料２５０円
        if($ryoukin < 5000){
            $ryoukin += $souryo;
        }
        return $ryoukin;
    }
?>