<?php # 149 文字クラス使ったパターン
$pattern = "/[赤青緑]の玉/u";

var_dump(preg_match($pattern, "それは赤の玉です。"));
var_dump(preg_match($pattern, "青の玉が2個です。"));
var_dump(preg_match($pattern, "緑の玉でした。"));
var_dump(preg_match($pattern, "緑の箱でした。"));
?>