<?php
require_once("Runner2.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>オーバーライドを試す</title>
</head>
<body>
<pre>
<?php

$runner = new Runner2("福士", 23);
// who()メソッドを実行
$runner -> who();
?>
</pre>
</body>
</html>