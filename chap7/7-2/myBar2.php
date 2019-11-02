<?php
require_once("Staff2.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>クラスメンバーを使う</title>
</head>
<body>
<pre>
<?php
// execute class method
Staff2::deposit(100);
Staff2::deposit(150);

echo Staff2::$piggyBank, "円になりました。\n";

$nameHana = new Staff2("花", 21);

// 花は遅刻したのでペナルティ　
$nameHana -> latePenalty();
// クラスプロパティを確認
echo Staff2:: $piggyBank, "円になりました。\n";
?>
</pre>
</body>
</html>