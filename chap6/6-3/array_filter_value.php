<?php # 188 配列から条件の合う値だけ抽出する array_filter($array, callback(ユーザ定義関数))
#ユーザ定義関数「callback関数」 
function isPlus($value){
    #引数が正の値かどうかを返す
    return $value> 0;
}

# 元の連想配列
$valueList = ["a" => 3, "b" => 0, "c" => 5, "d" => -2, "e" => 4];

# 配列から正の値だけ取り出す。
# 第2引数の文字列でコールバック関数を呼び出す isPlus()の引数には$valueListが渡される
$filtered = array_filter($valueList, "isPlus"); 

# 正の値のみの配列を表示
print_r($filtered);
?>