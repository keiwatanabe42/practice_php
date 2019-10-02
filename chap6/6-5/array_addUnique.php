<?php # 198 in_array()を利用して配列に新規の値のみ追加する関数の作成
# 配列に新規の値だけ追加する関数
function array_addUnique(&$array, $value){
    # 配列に値が存在するかチェック
    if(in_array($value, $array)){
        return false;
    }else{
        # 配列に値を追加
        $array[] = $value;
        return true;
    }
}

#execute
$myList = ["blue", "green"];
#関数を実行
array_addUnique($myList, "white");
array_addUnique($myList, "blue");
array_addUnique($myList, "red");
array_addUnique($myList, "green");
#結果表示
print_r($myList);
?>