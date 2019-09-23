<?php #p66 if  and
    $sugaku = 85;
    $eigo = 67;
    # 両方とも60点以上の時に合格
    if(($sugaku >= 60) && ($eigo >= 60)){
        echo "おめでとう！合格です！";
    }else{
        echo "残念、不合格です。";
    }
?>