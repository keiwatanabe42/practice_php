<?php
require_once("util.php");
?>

<?php
$utf8_String = "こんにちは";
$sjis_String = mb_convert_encoding($utf8_String, 'Shift-JIS');


$encoding = mb_internal_encoding();

// cken()でチェック
if(cken([$sjis_String])){
    echo "配列の値は、", $encoding, "です。";
}else{
    echo "配列の値は、", $encoding, "ではありません。";
}
?>