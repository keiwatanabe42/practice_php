<?php # p136 strcmp()
function compareStr($a, $b){
    #文字列にキャストして比較
    $result = strcmp($a, $b);
    if($result < 0){
        echo "{$a}、{$b}の順。\n";
    }else if($result == 0){
        echo "{$a}、{$b}は同じ。\n";
    }else if($result > 0){
        echo "{$b}、{$a}の順。\n";
    }
}

# execute
compareStr("123", 99);
compareStr("A123", 99);
compareStr("009", 99);
?>