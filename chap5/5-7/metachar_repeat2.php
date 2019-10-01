<?php # 154 {,} 桁範囲指定
#小文字4～8文字にマッチ
$pattern = "/[a-z]{4,8}/u";

var_dump(preg_match($pattern, "cycling"));
var_dump(preg_match($pattern, "marathon"));
var_dump(preg_match($pattern, "run"));
var_dump(preg_match($pattern, "SURF"));
?>