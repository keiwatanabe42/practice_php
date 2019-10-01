<?php # 167 配列の値をリスト表示する関数を作る
# 配列を使ってチーム分け
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
$teamB = ["江藤幸代", "小野幸子"];
# チームメンバーの名前をリストで表示する
function teamList($teamname, $nameList){
    echo "{$teamname}", "\n";
    echo "<ol>", "\n"; # Ordered List 順序あるリスト
    for($i = 0; $i < count($nameList); $i++){
        echo "<li>", $nameList[$i], "</li>\n"; # List Item リスト表示したい項目につける
    }
    echo "</ol>\n";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>名前の配列</title>
</head>
<body>
<!--チームの表示-->
<?php
teamList("Aチーム", $teamA);
teamList("Bチーム", $teamB);
?>
</body>
</html>