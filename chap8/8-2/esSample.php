<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>XSS対策</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<pre>
<?php
// util.phpを読み込む
require_once("util.php");
?>

<?php
$myCode = "<h2>テスト１</h2>";
$myArray = ["a" => "<p>赤</p>", "b" => "<script>elect('hello')</script>"];
// es()でHTMLエスケープして表示する
echo "\$myCodeの値 : ", es($myCode);
echo "<br>\n\n";
echo "\$myArrayの値 : ";
print_r(es($myArray));
?>
</pre>
</div>
</body>
</html>