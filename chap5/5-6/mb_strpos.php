<?php # p139 文字列が含まれている位置を検索
function check($target, $str){
    $result = mb_strpos($target, $str);
    if($result === false){
        echo "「{$str}」は「{$target}」には含まれません。\n";
    }else{
        echo "「{$str}」は「{$target}」の{$result}字目にあります。\n";
    }
}

# execute
check("東京都渋谷区神南", "渋谷");
check("東京都渋谷区神南", "新宿");
check("PHP, Swift, C++", "PHP");
check("PHP, Swift, C++", "Python");
?>