<?php # 149 文字クラス（[]）を使わないパターン
$pattern = "/赤の玉/u";
var_dump(preg_match($pattern, "赤の玉です。"));
var_dump(preg_match($pattern, "青の玉です。"));
var_dump(preg_match($pattern, "赤の箱です。"));
?>