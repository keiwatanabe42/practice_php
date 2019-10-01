<?php # 156 preg_quote() 指定したメタ文字をエスケープする関数
$escaped = preg_quote("http://sample.com/php/", "/");
$pattern = "/$escaped/u";

echo $pattern, "\n";
var_dump(preg_match($pattern, "URLはhttp://sample.com/php/ です。"));
var_dump(preg_match($pattern, "URLはhttp://sample.com/swift/ です。"));
?>