<?php # 199 配列同士を比較して、一致しない値を見つける array_diff()
# チェックする配列
$checkID = ["a21", "d21", "d33", "e53"];
# 基準となる配列
$aList = ["a12", "b15", "d21"];
$bList = ["d13", "e53", "f10", "k12"];

# IDをチェックする。
$diffID = array_diff($checkID, $aList, $bList); # aList,bList両方に含まれていない値を調べる
# aList,bListに存在しなかったIDを出力
foreach($diffID as $value){
    echo "{$value}は両リストに存在しない新規のIDです。\n";
}
?>