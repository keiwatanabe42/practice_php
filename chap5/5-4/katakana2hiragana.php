<?php #p126 カタカナをひらがなに変換
$yomi1 = "ｽｺｯﾄ・ﾗﾌｧﾛ";
$yomi2 = "チャーリー・ミンガス";
$hiragana1 = mb_convert_kana($yomi1, "HcV");
$hiragana2 = mb_convert_kana($yomi2, "HcV");

echo $hiragana1, "\n";
echo $hiragana2, "\n";
?>