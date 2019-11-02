<?php // 論理積　論理和　否定
$test1 = TRUE;
$test2 = FALSE;

$judge1 = $test1 && $test2; // かつ
$judge2 = $test1 || $test2; // または
$judge3 = !$test1;

var_dump($judge1); // false
var_dump($judge2); // true
var_dump($judge3); // false
?>

<br>
<?php // and orを使った場合

$judge1 = ($test1 and $test2); // ()でくくる
$judge2 = ($test1 or $test2);

var_dump($judge1);
var_dump($judge2);
?>

<br>
<?php // and or ()をつけない場合、演算順序の関係で想定外の結果となる

$judge1 = $test1 and $test2; // 先に実行される ⇨ $judge1 = test1 => TRUE
$judge1 = $test1 or  $test2;

var_dump($judge1);
var_dump($judge2);