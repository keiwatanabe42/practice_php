<?php # p74 while
    $numArray = array(); # 空の配列
    
    while(count($numArray) < 5 ){
        $num = mt_rand(1, 30);
        # in_array(A, B) 配列 A に 値B が入っていないか
        if(!in_array($num, $numArray)){
            array_push($numArray, $num); #array_push() 配列の最後に値を追加する
        }
    }

    print_r($numArray);
?>