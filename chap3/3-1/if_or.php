<?php #p67 if or ||
    $sugaku = 42;
    $eigo = 67;
    # どちらか一方でも60点以上ならば合格
    if(($sugaku >= 60) || ($eigo >= 60)){
        echo "おめでとう！合格です！";
    }else{
        echo "残念、不合格です。";
    }
?>