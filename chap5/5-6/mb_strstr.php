<?php # 140 見つけた特定の文字を含めた後ろの文字列を取り出す。
function pickout($target, $str){
    $result = mb_strstr($target, $str);
    if($result === false){
        echo "(not found)\n";
    }else{
        echo "{$result}\n";
    }
}

#execute
pickout("東京都港区赤坂2-3-4", "赤坂");
pickout("東京都渋谷区神南1-1-1", "渋谷区");
pickout("東京都渋谷区道玄坂5-5-5", "原宿");
?>