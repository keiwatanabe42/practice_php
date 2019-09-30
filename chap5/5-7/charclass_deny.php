<?php # 150 「^」メタ文字：否定
$pattern = "/[^青赤]木/u"; # 青木、赤木以外とマッチ
var_dump(preg_match($pattern, "大木"));
var_dump(preg_match($pattern, "青木"));
var_dump(preg_match($pattern, "赤木"));
var_dump(preg_match($pattern, "赤木、白木"));
?>