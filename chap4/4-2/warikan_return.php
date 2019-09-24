<?php # p91 関数を実行せず中断する
    function warikan($total, $ninzu){
        # 人数が０人以下の場合は何も返さない
        if($ninzu <= 0){
            return;
        }

        $result = $total/$ninzu;
        
        echo "{$total}円を{$ninzu}人で分けると{$result}円";
        echo "<br>" . PHP_EOL; 
    }
    #pattern 1
    warikan(2500, 2);
    warikan(3000, 0);
    warikan(5500, 4);
?>
    
    