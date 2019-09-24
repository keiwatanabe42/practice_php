<?php # p94 第2引数の個数を可変長にするユーザ定義関数
    function team($name, ...$members){
        print_r($name . PHP_EOL);
        print_r($members);
    }

    #team()を試す。
    team("peach", "佐藤", "田中", "加藤");
?>