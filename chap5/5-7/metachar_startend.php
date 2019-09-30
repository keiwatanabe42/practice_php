<?php # 153 $ 終端一致
# 山で始まり子で終わる4文字のパターン
$pattern = "/^山..子$/u";

var_dump(preg_match($pattern, "山田智子"));
var_dump(preg_match($pattern, "山本あさ子"));
var_dump(preg_match($pattern, "山崎貴美"));
?>