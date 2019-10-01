<?php # 174 配列を文字列に変換
$data = ["赤井一郎", "伊藤　淳", "上野信二", ];
$glue = "さん、"; # glue : 接着剤の意味
$nameList = implode($glue, $data);
$nameList .= "さん";

print_r($nameList);
?>