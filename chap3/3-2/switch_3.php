<?php #p71 switch not use break
    $color = "green";

    switch($color){
        # "green" と "red" で同じ処理を行う
        case "green":
        case "red":
            $price = 140;
            break;
        case "blue":
            $price = 160;
            break;
        default:
            $price = 100;
            break;
    }

    echo "{$color} は {$price} 円";
?>