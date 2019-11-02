<?php // printf() フォーマットを指定した文字列を表示する
// 円周率をそのまま表示
echo "echo : ", M_PI; // M_PI : 円周率の定数 = pi()
// 小数点第３位まで表示
echo "<br>";
printf('printf : %.3f', M_PI);
?>

<br><br>
<?php // フォーマット指定する文字列が複数の場合
$a = 15.69;
$b = 11.32;

printf('MAX %.1f, min %.1f', $a, $b);
?>

<br><br>
<?php // フォーマット文字列を変数に入れて指定する
$format = 'MAX %.1f, min %.1f';

printf($format, $a, $b);
?>

<br><br>
<?php // 符号演算子：数値は通常性の値の場合は+はつかないが、フォーマット文字列でプラスをつける
$a = -5;
$b = 9;

// display $a
printf('%+d', $a);
echo ", ";
// display $b
printf('%+d', $b);
?>

<br><br>
<?php // パディング演算子：０埋めなど足りない部分を埋める文字を指定する
$a = 7;
$b = 2380;
// 空白か0以外の文字を指定する場合はダブルクォーテーションで囲む。*は空白か0以外なのでダブルクォーテーションを使用する
printf("請求額は%03dです。請求額は%'*6d円", $a, $b);
?>

<br><br>
<?php // 0000-00-00の書式になるように変数を埋め込む
$year = 1987;
$month = 3;
$day = 9;

printf('%4d-%02d-%02d', $year, $month, $day);
?>

<br><br>
<?php // アラインメント指定子：左寄せ（–）や右寄せ（+）を指定する
$a = "23ab";
printf("IDは%'#-8sです。", $a);
printf("IDは%'*+8sです。", $a);
?>

<br><br>
<?php // 幅指定子：最低何桁の文字列にするか指定する。指定桁数以上のものはそのまま表示される。
$a = 83;
$b = 92018;
$c = "3-A";

printf('number is %04d.', $a);
printf('number is %04d.', $b);
printf('ID is %04s.', $c);
?>

<br><br>
<?php // 精度指定子：小数点以下の桁数を指定。不動称す店の場合は指定桁数で四捨五入、文字列の場合は指定文字数で切り捨て
$a = 10.2582;
$b = 3.1;
$c = "Hypertext Preprocesser!";

printf('result is %.2f. ', $a);
printf('result is %.2f. ', $b);
printf("PHP is %.5s ．．．", $c);
?>

<br><br>
<?php // %をエスケープして表示する
$per = 64.6;
printf('達成率は%.2f%%です。', $per);
?>

<br><br>
<?php // sprintf()：フォーマット指定した文字列を返す
$year = 2019;
$seq = 539;
$type = "P7";

// フォーマット指定した文字列を返す
$id = sprintf('%4d%06d-%s', $year, $seq, $type);
echo "製品IDは", $id, "です。";
?>

<br><br>
<?php // vprintf() : 置換する値が複数ある場合、配列で指定して表示する関数。vsprintf()もある
$max = 15.69;
$min = 11.32;
$avg = 13.218;

// 置換する文字列
$convertData = array($max, $min, $avg);
// フォーマット文字列
$format = 'MAX %.1f, min %.1f, avg %.1f';
// 配列に入れた置換する文字列を置換する
vprintf($format, $convertData);
?>

<br><br>
<?php // number_format() : 数値を3桁区切りフォーマットにする関数
$price = 1980 * 2;
$sumPrice = number_format($price);
echo $sumPrice, "円";
?>

<br><br>
<?php // number_format()の第２引数で小数点以下の桁数を指定
$length = 235.365;
$dispLength = number_format($length, 2);

echo $dispLength, "m";