<?php // preg_match($pattern, $msg) : 正規表現 指定したパターンにマッチするかチェックする関数 match: 1 unmatch: 0 error: false
$pattern = "/46-49/u";
$result1 = preg_match($pattern, "確か49-46でした");
$result2 = preg_match($pattern, "多分46-49だった");
$result3 = preg_match("/46-49/u", "49-46");

var_dump($result1);
var_dump($result2);
var_dump($result3);
?>

<br><br>
<?php // 正規表現の中に任意の文字を入れたい場合、 '.'をつける
$pattern =  "/4.-49/u";

$result1 = preg_match($pattern, "確か49-46でした");
$result2 = preg_match($pattern, "多分46-49だった");
$result3 = preg_match($pattern, "41-49かな？");

var_dump($result1);
var_dump($result2);
var_dump($result3);
?>

<br><br>
<?php // ユーザーが範囲指定した正規表現　ex) 6~9の場合 -> [6-9]
$pattern = "/4[6-9]-49/u";

$result1 = preg_match($pattern, "確か49-46でした");
$result2 = preg_match($pattern, "多分46-49だった");
$result3 = preg_match($pattern, "41-49かな？");

var_dump($result1);
var_dump($result2);
var_dump($result3);
?>

<br><br>
<?php // 区切り文字（delimter)は'/'出なくても良い。英数字とバックスラッシュ以外ならなんでもOK、　エスケープする場合はバックスラッシュを用いる
//ファイルパスの正規表現
$filepath = "/goods/image/cat/";
// 正規表現パターン
$pattern = "/\/image\//u";

$result = preg_match($pattern, $filepath);

var_dump($result);
?>

<br><br>
<?php // 文字クラス : []で囲まれた式のこと
// 文字クラスを使っていないパターン
$pattern = "/赤の玉/u";

$result1 = preg_match($pattern, "赤の玉");
$result2 = preg_match($pattern, "青の玉");
$result3 = preg_match($pattern, "緑の玉");

var_dump($result1);
var_dump($result2);
var_dump($result3);
?>

<br><br>
<?php
// 文字クラスを使ったパターン
$pattern = "/[赤青緑]の玉/u";

var_dump(preg_match($pattern, "赤の玉"));
var_dump(preg_match($pattern, "青の玉"));
var_dump(preg_match($pattern, "緑の玉"));
var_dump(preg_match($pattern, "緑の箱"));
?>

<br><br>
<?php // 文字クラス内で否定（^）を使った例
$pattern = "/[^青赤]木/u";

var_dump(preg_match($pattern, "大木"));
var_dump(preg_match($pattern, "青木"));
var_dump(preg_match($pattern, "赤木"));
var_dump(preg_match($pattern, "赤木、白木"));
?>

<br><br>
<?php
// A1 ~ F9 にマッチする
$pattern = "/[A-F][1-9]/u";

var_dump(preg_match($pattern, "B8"));
var_dump(preg_match($pattern, "G7"));
var_dump(preg_match($pattern, "D6"));
var_dump(preg_match($pattern, "a2"));
var_dump(preg_match($pattern, "1A"));
?>

<br><br>
<?php 
// 大文字-数字-英数字にマッチ
$pattern = "/[A-Z]-[0-9]-[a-zA-Z0-9]/u";

var_dump(preg_match($pattern, "A-5-5"));
var_dump(preg_match($pattern, "F-9-c"));
var_dump(preg_match($pattern, "G-17-10"));
var_dump(preg_match($pattern, "a-2-9"));
?>

<?php // 定義済みの文字クラス
/*
     \d = [0-9]
     \D = [^\d]
     \s = [\n\r\t\0xB]
     \S = [^\s]
     \w =[a-zA-Z0-9_]
     \W = [^\w]
*/
?>

<br><br>
<?php // 任意の文字の正規表現
$pattern = "/田中..子/u";

var_dump(preg_match($pattern, "田中佐知子"));
var_dump(preg_match($pattern, "田中亜希子"));
var_dump(preg_match($pattern, "田中幸子"));
var_dump(preg_match($pattern, "田中向日葵子"));
?>

<br><br>
<?php
// 山から始まる名前にマッチする
$pattern = "/^山/u";

var_dump(preg_match($pattern, "山田建設"));
var_dump(preg_match($pattern, "山本接骨医院"));
var_dump(preg_match($pattern, "大山観光"));
var_dump(preg_match($pattern, "藤田商店、山崎商店"));
?>

<br><br>
<?php // 先頭・末端一致
$pattern = "/^山..子$/u";

var_dump(preg_match($pattern, "山田智子"));
var_dump(preg_match($pattern, "山本あさ子"));
var_dump(preg_match($pattern, "山崎貴美"));
?>

<br><br>
<?php
// 東京または横浜でマッチする正規表現
$pattern = "/東京|横浜/u";

var_dump(preg_match($pattern, "東京タワー"));
var_dump(preg_match($pattern, "横浜駅前"));
var_dump(preg_match($pattern, "新東京美術館"));
var_dump(preg_match($pattern, "東横ホテル"));
?>

<br><br>
<?php // 桁が多い時など、繰り返し正規表現を使う場合、メタ文字{n,m}を活用すると便利。 n : 最小繰り返し数  m : 最大繰り返し数  n,: n回以上
// 数字３桁-2桁
$pattern = "/\d{3}-\d{2}/u";

var_dump(preg_match($pattern, "123-45")); // 1
var_dump(preg_match($pattern, "090-88")); // 1
var_dump(preg_match($pattern, "11-222")); // 0
var_dump(preg_match($pattern, "abc-de")); // 0
?>

<br><br>
<?php
// 小文字で４文字〜８文字にマッチ
$pattern = "/[a-z]{4,8}/u";

var_dump(preg_match($pattern, "cycling"));
var_dump(preg_match($pattern, "marathon"));
var_dump(preg_match($pattern, "run"));
var_dump(preg_match($pattern, "SURF"));
?>

<br><br>
<?php
// 携帯電話番号にマッチ
//$pattern = "/(070|080|090)(-?\d{4}){2}/u";
$pattern = "/(070|080|090)-{0,1}[0-9]{4}-{0,1}[0-9]{4}/u";
var_dump(preg_match($pattern, "090-1234-5678"));
var_dump(preg_match($pattern, "080-1234-5678"));
var_dump(preg_match($pattern, "07012345678"));
var_dump(preg_match($pattern, "12345678"));
?>

<br><br>
<?php // preg_quote($str, $escapeChar) : URLの'/'などエスケープしなければいけない正規表現の時、自動で必要なところにエスケープの\を埋め込んでくれる
$escapedUrl = preg_quote("http://sample.com/php/", "/");
$pattern = "/{$escapedUrl}/u"; // "/http:\/\/sample.com\/php\//u"
$pattern2 = "/http:\/\/sample.com\/php\//u";

var_dump($pattern);
var_dump(preg_match($pattern, "http://sample.com/php/"));
var_dump(preg_match($pattern, "http://sample.com/swift/"));

var_dump(preg_match($pattern2, "http://sample.com/php/"));
var_dump(preg_match($pattern2, "http://sample.com/swift/"));
?>