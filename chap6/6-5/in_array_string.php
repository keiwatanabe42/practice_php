<?php # 197 in_array()を使って配列の値と一致するか比較する関数を作成
$nameList = ["田中達也", "Sam Jones", "新井貴子"];

#メンバーかチェックして結果を出力する関数
function nameCheck($name){
    global $nameList;
    # $nameが配列$nameListの値と一致するかチェック
    if(in_array($name, $nameList)){
        echo "メンバーです。";
    }else{
        echo "メンバーではありません。";
    }
}

# execute
echo nameCheck("田中達也"), "\n";
echo nameCheck("新井"), "\n";
echo nameCheck("Sam Jones"), "\n";
echo nameCheck("SAM JONES"), "\n";
?>