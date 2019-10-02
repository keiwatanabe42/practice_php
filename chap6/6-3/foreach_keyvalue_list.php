<?php # 187 foreachで連想配列のキーと値を取り出す
# 連想配列
$data = ["ID" => "TR123", "商品名" => "ピークハント", "価格" => 14500];

echo "<ul>\n"; # ul : Unordered List : 順序のないリストを表示する際に使用
# 連想配列から順にキーと値を取り出す。
foreach($data as $key => $value){
    echo "<li>", $key, ": ", $value, "</li>\n";
}
echo "</ul>\n";
?>