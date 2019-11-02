<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>GETリクエスト処理</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
$data = $_GET["data"];
$data = rawurldecode($data);
// xss対策していない場合、tagなどが実行されて予期せぬ表記になる　テキストP265 
echo "「{$data}」を受け取りました。";
// xss対策　タグなどもそのままブラウザに出力される
$data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
echo "「{$data}」を受け取りました。";
?>
</div>
</body>
</html>