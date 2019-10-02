<?php # 201 正規表現を使って配列を検索、表示
$nameList = ["田中達也", "川崎賢一", "山田一郎", "杉山直樹"];

# 正規表現パターン
$pattern = "/田/";
# 正規表現パターンに一致する値を配列から取り出す。 preg_grep()
$result = preg_grep($pattern, $nameList);

# 該当した件数を表示
echo "該当 ", count($result), " 件\n";
# 一致した名前を表示
foreach($result as $value){
    echo $value, "\n";
}
?>