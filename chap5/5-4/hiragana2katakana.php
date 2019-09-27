<?php # p125 ひらがなを半角・全角カタカナへ変換
$yomi = "ふじのさぶろう";
$hankaku_katakana = mb_convert_kana($yomi, "h");
$zenkaku_katakana = mb_convert_kana($yomi, "C");

echo $hankaku_katakana, "\n";
echo $zenkaku_katakana, "\n";
?>