<?php # p113 printf()を使ってフォーマット指定をする
# 円周率をそのまま出力する
echo M_PI;
echo "<br>", PHP_EOL; # 改行

# フォーマット文字列を指定して出力
printf('%.3f', M_PI); # float型で小数点第3位まで表示するようにフォーマット指定
?>