<?php // 文字の変換；全角を半角に
$msg = "Ｈｅｌｌｏ　ＰＨＰ７をはじめよう。";

echo mb_convert_kana($msg, "as");
?>

<br><br>
<?php // 半角を全角に変換
$msg = "Hello! PHP7を始めよう。";

echo mb_convert_kana($msg, "AS");
?>

<br><br>
<?php // ひらがなをカタカナに変換
$yomi = "わたなべけいすけ";

$hankaku_katakana = mb_convert_kana($yomi, "h");
$zenkaku_katakana = mb_convert_kana($yomi, "C");

echo $hankaku_katakana, "<br>\n";
echo $zenkaku_katakana;
?>

<br><br>
<?php // カタカナをひらがなに変換
$yomi_hankaku = "ｽｺｯﾄﾞ・ﾗﾌｧﾛ";
$yomi_zenkaku = "チャーリー・ミンガス";

$convert_hiragana1 = mb_convert_kana($yomi_hankaku, "HcV");
$convert_hiragana2 = mb_convert_kana($yomi_zenkaku, "HcV");

echo $convert_hiragana1, "<br>\n";
echo $convert_hiragana2;
?>

<br><br>
<?php // 半角カタカナ、ひらがなを全角カタカナに変換する
$yomi1 = "ﾌｼﾞﾔﾏｻｸﾗ";
$yomi2 = "あしがらきんたろう";

$convert_katakana1 = mb_convert_kana($yomi1, "KV");
$convert_katakana2 = mb_convert_kana($yomi2, "C");

echo $convert_katakana1, "<br>\n";
echo $convert_katakana2;
?>

<br><br>
<?php // strtoupper() : 小文字を大文字に変換
$msg = "Apple iPhone";

echo strtoupper($msg);
?>

<br><br>
<?php // 大文字を小文字に変換
echo strtolower($msg);
?>

<br><br>
<?php // ucfirst() : 先頭の１文字を大文字に変換する uppercase firstの略？ ucwords : 英文に含まれる単語の先頭文字を大文字に変換
$msg = "THE QUICK BROWN FOX";

echo ucwords(strtolower($msg));
?>

<br>-----------------------------------------------------------------------------------------------------------------------
<br><br>
<?php // 文字列前後にある不要な文字を除去
/* 
    trim() : 先頭と末尾の除去
    ltrim() : 先頭　※ l: left
    rtrim() : 末尾    R: right
    
 */
$msg = "\tHello World!!    \n\n";
$result = trim($msg);

echo "before : <br>\n";
echo "[", $msg, "]<br>\n";
echo "after : <br>\n";
echo "[", $result, "]";
?>

<br><br>
<?php // trim()で除去されるのは限定されているため、除去したいものがデフォルト以外のものは第2引数に除去するものを設定する必要がある。
$msg = "　東京都千代田区　\n\n";
$result = trim($msg, "\0x20\t\n\r\0\v　");

echo "before<br>\n";
echo "[", $msg, "]<br>\n";
echo "after<br>\n";
echo "[", $result, "]<br>\n";
?>

<br><br>
<?php // HTMLタグ用の文字をエンティティに変換して出力する
// HTML用タグが含まれている文字列
$msg = "東京 <-> 京都　'Eat & Run'ツアー";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>エンティティ変換</title>
</head>
<body>
<?php
echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
echo "<br>";
echo $msg;
?>
</body>
</html>

<br><br>
<?php // strip_tags() : HTMLタグを取り除く
$msg = "<p><b> 北原白秋『砂山』</b>海は荒海<br>向こうは佐渡よ<br></p>";
echo strip_tags($msg);
?>

<br><br>
<?php // rawurlencode(), urlencode() : URLエンコード 前者　空白 -> %20  後者　空白 -> +  に変換
$page = "PHP 7 サンプル.html";
$path = rawurlencode($page);
$url = "http://sample.com/{$path}";

echo $url;
?>

<br><br>
<?php // rawurldecode(), urldecode() : URLデコード
$encoded = "http://sample.com/PHP%207%20%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB.html";
$decoded = rawurldecode($encoded);

echo $decoded;
?>