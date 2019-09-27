<?php # p124 mb_conver_kana() で　全角➡半角
$msg = "Ｈｅｌｌｏ！　ＰＨＰ７をはじめよう。";
echo mb_convert_kana($msg, "as");
?>