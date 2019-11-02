<!DOCTYPE html>
<html lang = "utf-8">
<head>
    <meta charset = "utf-8">
    <title> フォーム入力チェック</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<?php
require_once("../8-2/util.php");

if(!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encording Error! The expected encoding is ". $encoding;
    exit($err);
}
?>

<?php
// XSS対策
es($_POST);
?>

<?php
$name = $_POST["name"];
$isError = false;
// isset():bool 変数がセットされていて、NULLではないかチェック
if(isset($name)){
    $name = trim($name);
    if($name === ""){
        $isError = true;
    }
}else{
    $isError = true;
}
?>
<!-- エラーがあったとき -->
<?php if($isError):?>
<span class = "error">名前を入力してください。</span>
<form method = "POST" action = "nameCheckForm.php">
    <input type = "submit" value = "戻る">
</form>
<?php else:?>

<!-- エラーがなかったとき -->
<span>
こんにちは、<?php echo $name; ?> さん
</span>
<?php endif;?>
</body>
</html>