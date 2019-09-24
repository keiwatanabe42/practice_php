<?php # p94 ユーザ関数 配列の要素を連結して表示する
    function team($name, ...$members){
        # 配列 $members の名前を連結する
        $list = implode("、 ", $members); # 第一引数 連結するString（空でもOK）
        
        return "{$name} : {$list}";
    }

    # チームを作る
    $team1 = team("Peach", "佐藤", "田中", "加藤");
    $team2 = team("カボス", "ひろし", "きえこ");

    echo $team1 . "<br>" . PHP_EOL;
    echo $team2;
?>