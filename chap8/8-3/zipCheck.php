<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>フォーム入力チェック</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php
// en(), cken()呼び出し
require_once("../8-2/util.php");
?>

<?php
$errList = [];
?>

<?php
// HTMLエンコードチェック
if(!cken($_POST)){
    $encoding = mb_internal_encoding();
    $errMsg = "encoding Error! The expected encoding is ". $encoding;
    exit($errMsg);
}
?>

<?php
// XSS対策
$_POST = es($_POST);
?>

<?php
$isError = false;
// フォーム入力チェック
if(isset($_POST)){
    $zip = $_POST["zip"];
    $zip = trim($zip);
    if($zip === ""){
        $errList[] = "郵便番号を正しく入力してください。";
        $isError = true;
    }
    // 正規表現チェック
    $pattern = "/\d{3}-\d{4}/u";
    $isCheckZip = preg_match($pattern, $zip);
    if(!$isCheckZip){
        $errList[] = "郵便番号を正しく入力してください。";
        $isError = true;
    }
}else{
    $errList[] = "郵便番号を正しく入力してください。";
    $isError = true;
}
?>

<?php
// 結果を表示
if($isError){
    echo "<ol>";
    foreach($errList as $value){
        echo "<li>", $value, "</li>";
    }
    echo "</ol>";
}else{
    echo "郵便番号は{$zip}です。";
}
?>

<!-- 戻るボタンフォーム -->
<form method = "POST" action = "zipCheckForm.php">
    <ul>
        <li><input type = "submit" value = "戻る"></li>
    <ul>
</form>

</div>
</body>
</html>