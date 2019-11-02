<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>割り勘計算</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
require_once("../8-2/util.php");
?>

<?php
// 文字エンコードチェック
if(!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err =  "encording Error! exective encoding is ". $encoding;
    exit($err);
}

// xss対策
es($_POST);
?>

<?php
$errList = [];
?>

<?php
// 合計金額のチェック
$isError = false;
// 合計金額のフォーム値入力チェック
if(isset($_POST["sum"])){
    $sumPrice = $_POST["sum"];
    // 入力された値が数値かチェック
    if(!ctype_digit($sumPrice)){
        $errList[] = "合計金額を整数で入力してください。";
    }
}else{
    $errList[] = "合計金額が未設定";
}

// 人数のチェック
if(isset($_POST["numOfPeople"])){
    $numOfPeople = $_POST["numOfPeople"];
    // 数値かチェック
    if(!ctype_digit($numOfPeople)){
        $errList[] = "人数を整数で入力してください。";
    }
}else{
    $errList[] = "人数が未設定";
}
?>

<?php
// エラーがある場合
if(count($errList) > 0){
    echo '<ol class = "error">';
    foreach($errList as $value){
        echo "<li>", $value, "</li>";
    }
    echo '</ol>';
?>

<!-- 戻るボタンフォーム -->
<form method = "POST" action = "splitBillForm.php">
    <ul>
        <li><input type = "submit" value = "戻る"></li>
    </ul>
</form>

<?php
}else{
    // 割り勘の値を計算
    $divRemindar = $sumPrice % $numOfPeople;
    $splitBillPrice = ($sumPrice - $divRemindar) / $numOfPeople;
    
    $sumPrice = number_format($sumPrice);
    $splitBillPrice = number_format($splitBillPrice);

    echo "{$sumPrice}円を{$numOfPeople}人で割り勘します。<br>";
    echo "1人当たり{$splitBillPrice}円を支払えば、不足金は{$divRemindar}円です。";
}
?>
</div>
</body>
</html>

