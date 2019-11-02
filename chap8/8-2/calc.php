<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>フォーム入力の値で計算する</title>
    <link href = "../../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
$tanka = $_POST["tanka"];
$kosu = $_POST["kosu"];

$result = $tanka * $kosu;

$tanka = number_format($tanka);
$result = number_format($result);
echo "単価{$tanka}円 × {$kosu}個 は {$result}円です。";
?>
</div>
</body>
</html>
