<?php # 146 正規表現 任意の文字「.」
$result1 = preg_match("/4.-49/u", "確か49-46でした。");
$result2 = preg_match("/4.-49/u", "たぶん46-49だった。");
$result3 = preg_match("/4.-49/u", "41-49かな？");

var_dump($result1);
var_dump($result2);
var_dump($result3);
?>