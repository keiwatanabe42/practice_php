<?php # p127　半角カタカナ、ひらがなを全角カタカナに変換 
$yomi1 = "ﾌｼﾞﾔﾏｻｸﾗ";
$yomi2 = "あしがらきんたろう";
$hiragana1 = mb_convert_kana($yomi1, "KCV");
$hiragana2 = mb_convert_kana($yomi2, "KCV");

echo $hiragana1, "\n";
echo $hiragana2, "\n";
?>