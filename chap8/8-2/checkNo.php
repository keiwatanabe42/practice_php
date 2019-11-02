<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>GETリクエスト処理</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
$noArray = [3, 5, 7, 8, 9];
$no = $_GET["no"];
if(in_array($no, $noArray)){
    echo "{$no}はありました。";
}else{
    echo "{$no}は見つかりません。";
}
?>
</div>
</body>
</html>