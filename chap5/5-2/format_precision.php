<?php # p117 精度指定子 小数点以下の桁数、値の文字数を指定する
$a = 10.2582;
$b = 3.1;
$c = "Hypertext Preprocessor !";
printf('結果は %.2f です。', $a);
printf('結果は %.02f です。', $b);
printf('PHPは %.5s ...', $c);
?>