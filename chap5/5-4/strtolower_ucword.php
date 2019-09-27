<?php # p128 単語の1文字目を大文字に変える（先にすべての文字を小文字に変換している）
$msg = "THE QUICK BROWN FOX";
echo ucwords(strtolower($msg));
?>