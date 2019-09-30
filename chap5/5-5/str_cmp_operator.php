<?php # p135 半角英文字の大小比較、アルファベット順
function compare($a, $b){
    if ($a < $b) {
        echo "{$a}、{$b}の順。\n";
    } else if ($a == $b) {
        echo "{$a}、{$b}は同じ。\n";
    } else if ($a > $b) {
        echo "{$b}、{$a}の順。\n";
    }
}

# execute
compare("apple", "apple");
compare("apple", "beatles");
compare("apple", "android");
compare("apple", "APPLE");
?>