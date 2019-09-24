<?php # p86 tan() keisan takasa
    $kyori = 20;
    $kakudo = 32 * pi()/180; # 32°をラジアンに変換
    
    $takasa = $kyori * tan($kakudo);
    var_dump($takasa);
    # $takasa を１０倍にしてround()で四捨五入
    #round()で四捨五入する桁を決めていない場合、小数点第１位が四捨五入される
    # 10倍しているので、小数点第２位が四捨五入される
    $takasa = round($takasa*10)/10;

    echo "木の高さは {$takasa} mです。";
?>