<?php
require_once("Soccer.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Soccerクラスを利用する</title>
</head>
<body>
<pre>
<?php
// コンストラクタ呼び出し
$player = new Soccer("シンジ");
// 親メソッド試す
$player -> who();
// 子メソッド試す
$player -> play();
?>
<!--マジックメソッドを試す-->
<?php
// constructor
$player2 = new Player("つばさ");
// execute __toString　echoは文字列を出力する関数　＝　$player2は文字列に自動的にキャストされている！
// マジックメソッド : 特殊な状況で実行されるメソッド（インスタンスを文字列にキャストしなけれならない時など）
echo "{$player2}";
?>
</pre>
</body>
</html>