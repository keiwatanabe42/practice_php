<?php #p99 static変数
    function countUp(){
        static $count = 0; # 初期化は最初の1回しかされない
        $count += 1;
        
        return $count;
    }

    # 10回実行する
    for ($i = 0; $i < 10; $i++){
        $num = countUp();
        echo "{$num} 回目。";
    }
?>