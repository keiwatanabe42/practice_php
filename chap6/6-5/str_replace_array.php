<?php # 200 配列$dataに格納されている略語を検索して、正式名称に置換して出力

$data = ["NV15", "ST", "MD500GB"];
#検索ワード
$search = ["NV", "ST", "MD"];
#置換ワード
$replacement = ["NEW Vision", "スリムタワー", "マルチドライブ"];
#execute
$result = str_replace($search, $replacement, $data);

#表示
echo "商品データ：\n";
echo $result[0], ", ", $result[1], ", ", $result[2];
?>
