<?php # 166 配列の個数を取り出す関数を利用して名前を出力
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];

for($i = 0; $i < count($teamA); $i++){
    echo $teamA[$i], "さん\n";
}
?>