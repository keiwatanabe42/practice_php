メタ構文変数：「foo」や「bar」、日本ではhogeやfugaといった意味のないことを意味する言葉
<?php // require_once("class,php") : (同じ階層にあるclass.phpがある場合の）クラスファイルを読み込んで利用するための関数 require,要求する
// read class
require_once("Staff.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>クラスを読み込んで利用する</title>
</head>
<body>
<pre>
<?php
// make instance
$nameHana = new Staff("花", 21);
$nameTaro = new Staff("太郎", 35);

// execute method
$nameHana -> hello();
$nameTaro -> hello();
?>
</pre>
</body>
</html>