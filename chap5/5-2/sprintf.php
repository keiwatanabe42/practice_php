<?php # p119 フォーマット済みの文字列を変数に入れて扱う
$year = 2016;
$seq = 539;
$type = "P7";
$id = sprintf('%04d%06d-%s', $year, $seq, $type);
echo "製品IDは", $id , "です。";
?>