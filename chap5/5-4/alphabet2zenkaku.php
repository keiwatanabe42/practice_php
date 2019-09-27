<?php # 125 全角を半角へ
$msg = "Hello! PHP7をはじめよう。";
echo mb_convert_kana($msg, "AS");
?>